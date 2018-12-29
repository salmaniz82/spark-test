<?php 

class sseCtrl extends appCtrl
{


	public $DB;

	public function __construct()
	{
		$this->DB = new Database();
	}

	public function page()
	{
		
		View::render('sse-page.html');

	}


	public function server()
	{ header("Content-Type: text/event-stream");
	  header("Cache-Control: no-cache");
	  header("Connection: keep-alive");
	$lastId = $_SERVER["HTTP_LAST_EVENT_ID"];
	if (isset($lastId) && !empty($lastId) && is_numeric($lastId)) {
		    $lastId = intval($lastId);
		    $lastId++;
	}
	$data = array('message'=> 'i will be chaning this in the time');

	while (true) {	    
	if ($data) {
        sendMessage($lastId, $data);
        $lastId++;
	    }
		  sleep(2);
		}

		function sendMessage($id, $data) {
		    echo "id: $id\n";
		    echo 'data: ' . json_encode($data) . "\n\n";
		    ob_flush();
		    flush();
		}

	}

}