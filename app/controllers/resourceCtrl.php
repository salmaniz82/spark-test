<?php 

class resourceCtrl extends appCtrl
{


	public function resource()
    {

        $resourceModule = $this->load('module', 'resource');
        $data = $resourceModule->returnAllResource();
        View::render('dashboard/resource', $data);

    }


    public function saveResource()
    {


        $redirectUrl = $_SERVER['REDIRECT_URL'];

        if(isset($_POST['name']) && strlen($_POST['name']) > 3)
        {


            
            $resource = $_POST['name'];       
            $resourceModule = $this->load('module', 'resource');
            if(!$resourceModule->pluckByName($resource))
            {
                

                if($resourceModule->insert($resource))
                {

                    $_SESSION['flashMsg'] = "New Resource has been added";
                    $_SESSION['fClass'] = 'success';
                    header("location: $redirectUrl");


                } else {

                    $_SESSION['flashMsg'] = "Failed whie adding new Resource";
                    $_SESSION['fClass'] = 'error';
                    header("location: $redirectUrl");
                }

            } else {
                    
                    $_SESSION['flashMsg'] = "Resource: $resource exist";
                    $_SESSION['fClass'] = 'error';
                    header("location: $redirectUrl");
            }

        } else {

                $_SESSION['flashMsg'] = "Resource must be more than 4 character";
                $_SESSION['fClass'] = 'error';
                header("location: $redirectUrl");
        }


    }

}