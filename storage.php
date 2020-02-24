<?php
require_once("./setting.php"); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$step = $_POST['step'];
	if($step=="store_info"){
		
		$DB = Connect();
		
		$message = $_POST['message'];
		$song = $_POST['song'];
	
		$sqlinsert = "insert into users(message, song, status, opened, heart, datetimestamp) VALUES ('".$message."', '".$song."', '1', '1', '1', '".date_time_now()."')";
		if ($DB->query($sqlinsert) === TRUE) {
			$last_id = $DB->insert_id;
			//echo $last_id_encrypted = Encode($last_id);
			echo $last_id_encrypted = urlencode(Encode($last_id));
			die();
		}else{
			echo "Error: " . $sqlinsert . "<br>" . $DB->error;
			die();
		}
	}
}
		
?>