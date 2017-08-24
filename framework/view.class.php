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
    	header('Content-Type: application/json');
    	echo json_encode($data);
    }

    public static function getTemplatePartial()
    {
        
    }

}
