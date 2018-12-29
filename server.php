<?php header("Content-Type: text/event-stream");
	header("Cache-Control: no-cache");
	header("Connection: keep-alive");

		$lastId = $_SERVER["HTTP_LAST_EVENT_ID"];
		if (isset($lastId) && !empty($lastId) && is_numeric($lastId)) {
		    $lastId = intval($lastId);
		    $lastId++;
		}

		if ( !defined('ABSPATH') )
		define('ABSPATH', dirname(__FILE__) . '/');

		require_once ABSPATH .'app/config.php';
		require_once ABSPATH .'framework/database.class.php';

		$db =  new Database();
		$db->table = 'todos';

		while (true) {

			$data = $db->getbyId(641)->returnData()[0];

		    if ($data) {
		        sendMessage($lastId, $data);
		        $lastId++;
		    }
		    sleep(5);
		}

		function sendMessage($id, $data) {
		    echo "id: $id\n";
		    echo 'data: ' . json_encode($data) . "\n\n";
		    ob_flush();
		    flush();
		}

