<?php

class View
{
    public static function render($page, $data=null)
    {
        
    	if(strpos($page, '.') === false)
    	{
    		$page = $page.'.php';
    		
    	}
    	else {
    		$page = $page;
    	}

        return require_once 'pages/'.$page;
        
    }


    public static function responseJson($data, $statusCode = 202)
    {
        
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        
        /*
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        */

        /*
        echo json_encode($data, JSON_PRETTY_PRINT);
        */
        echo json_encode($data);
    }

    public static function composeTemplatePartial($templateRoute)
    {

        $templateRoute = siteURL().$templateRoute;
        echo file_get_contents($templateRoute);

    }

    public static function composeTemplateCurl($templateRoute)
    {

        $url = siteURL().$templateRoute;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $data = curl_exec($curl);
        curl_close($curl);
        echo $data;
    }

}
