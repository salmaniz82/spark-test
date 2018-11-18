<?php 

function _e($string)
{
	return htmlspecialchars($string);
}


function dataLoop(array $dataforLoop, $callback)
{


	foreach ($dataforLoop as $key => $value) {


		$callback($callback);
			
		}	

}


function hello(){

	echo "hello from helper";
}


function ddx($var)
{
	echo "<pre>";

	var_dump($var);

	echo "</pre>";
}


function prx($var)
{
	echo "<pre>";

	print_r($var);

	echo "</pre>";
}


?>