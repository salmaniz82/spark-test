<?php

class Route
{
    public $req_uri; /* incomming server uri in arrays */
    public $registered = array();
    public $segments;
    static $params = null;
    public $method;
    public $appURI;
    public $serverRawURI;
    static $activeRoute;

    
    
    
   
    public function __construct()
    {

        $this->serverRawURI = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $this->serverRawURI);
        $uri[0] = '/';      
        $uri = array_values(array_filter($uri));
        $this->req_uri = $uri;
        $this->method = $_SERVER['REQUEST_METHOD'];

    }


    public function breakStringToArray($string)
    {
        $string = explode('/', $string);
        $string[0] = '/';      
        $string = array_values(array_filter($string));
        return $string;
    }

    public function joinArrayToUrlString($string)
    {
        $string = implode('/', $string);
        $string = preg_replace('#/+#','/',$string);
        return $string;
    }


    public function getRoute()
    {
        return $this->uriSegment();
    }

    

    public function get($appUri, $callback)
    {

        if($this->method == 'GET')
        {

            $this->execute($appUri, $callback);
            return $this;
        }
    }

    public function post($appUri, $callback) 
    {

     if($this->method == 'POST')
        {
            $this->execute($appUri, $callback);
        }   
    }

    public function put($appUri, $callback) 
    {

     if($this->method == 'PUT')
        {
            $this->execute($appUri, $callback);
        }   
    }

    public function delete($appUri, $callback) 
    {

     if($this->method == 'DELETE')
        {
            $this->execute($appUri, $callback);
        }   
    }

    protected function uriSegment()
    {
       

     $string = rtrim($this->serverRawURI, '/');
        
        
       if($string == '') {
        return '/';
       }
       else {
        return $string;
       }
        
    }

    static function Params()
    {
        return new self;
    }

 
    public function execute($appUri, $callback)
    {
        
       
       $this->appURI = $appUri;
       

       /*

        1. check if appURI has Params if no then continue if yes 
        2. if found modify appURI
       */

        $countAppUriSEgment = sizeof($this->breakStringToArray($appUri));
        $serverUriSegment = sizeof($this->req_uri);

        if($countAppUriSEgment == $serverUriSegment) 
        {

            if(!in_array($appUri, $this->registered))
            {
            
            // checking if appuri has some patterns signatures
            if(preg_match_all('/\{(.*?)\}/', $appUri, $matchedParamItemsValues)) {
            


            $appUriPieces = $this->breakStringToArray($appUri);


            foreach ($matchedParamItemsValues[0] as $key => $value) {
                // checking the indexes of params signatures in array provides in appURI

                $paramIndexes[] = array_search($value, $appUriPieces);


            }

            // replace params signature with actual macthed values from incomming server URI 

           

            foreach ($paramIndexes as $key => $value) {

                $appUriPieces[$value] = $this->req_uri[$value];
                $paramTemp[$matchedParamItemsValues[1][$key]] =    $this->req_uri[$value];
                
                
            }

            self::$params = $paramTemp;

            $newUrlString = $this->joinArrayToUrlString(array_values($appUriPieces));

            $appUri = $newUrlString;
          

        }


            } 

        } 


            $this->registered[] = $appUri;
        


        if($appUri == $this->uriSegment($appUri))
        {

              
            if( is_callable($callback) )
            {
               
               
                //return $callback();

                $callback();
         
                return $this;

            }

            if( is_array($callback) )
            {

                $filepathCtrl = 'app/controllers/'.$callback[0].'Ctrl'. '.php';

                if( file_exists($filepathCtrl) )
                {
                    require_once $filepathCtrl;
                    if(class_exists( $callback[0].'Ctrl') )
                    {
                        if(method_exists($callback[0].'Ctrl', $callback[1]) && isset($callback[1]))
                        {
                            // find controller and class ready for dynamic instansiation
                            $ctrlClassname = $callback[0].'Ctrl';
                            $controller = new $ctrlClassname();
                            $controller->$callback[1]();
                            
                            return $this;
                        }
                        else
                        {
                            echo 'Controller method doest not exist!';
                        }
                    }
                    else
                    {
                        echo 'Controller Class undefined!';
                    }
                }
                else
                {
                    echo 'Cannot Find associated Controller File';
                }
            }

        }

        else {

            
            
        }

            
    }


    static function Current($menuLink)
    {
     
        if($menuLink == $_SERVER['REQUEST_URI'])
        {
            self::$activeRoute = true;
        }
        else 
        {
            self::$activeRoute = false;
        }
      echo (self::$activeRoute == true ? 'active' :  '');
    }

    


    public function filter($callback)
    {

        if($callback())
            return $this;

    }

 
    public function otherwise($callback)
    {
        if(!in_array($this->getRoute(), $this->registered))
        {
            $callback();
            return false;
        }
    }


}