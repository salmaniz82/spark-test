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

?>