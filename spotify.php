<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$step = $_POST['step'];
	if($step=="searchsongs"){
		
		$keyword = $_POST['song'];


		//Getting suthorisation access token from spotify
		$client_id = 'yourclientid'; 
		$client_secret = 'yourclientsecret'; 

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,            'https://accounts.spotify.com/api/token' );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     'grant_type=client_credentials' ); 
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 

		$result=curl_exec($ch);
		$json = json_decode($result);

			foreach($json as $key => $val){
				if($key=="access_token"){
					$authtoken = $val;  
				}
			} 
		//Getting suthorisation access token from spotify

		$spotifyURL = 'https://api.spotify.com/v1/search?q='.urlencode($keyword).'&market=IN&type=track&limit=30';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $spotifyURL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Bearer '.$authtoken)); 
		$json = curl_exec($ch);
		$json = json_decode($json);
		curl_close($ch);

		foreach($json as $key => $val){
			foreach($val as $key => $value){
				if($key=="items"){
					foreach($value as $key => $val){
						foreach($val as $key => $val){
							if($key=="id"){
								//echo "&nbsp;&nbsp;&nbsp;&nbsp; &bull; <b>".$key. "</b> = " .$val. "<br>"; 
								$arrayid[] = $val;
							}
							if($key=="name"){
								//echo "&nbsp;&nbsp;&nbsp;&nbsp; &bull; <b>".$key. "</b> = " .$val. "<br>"; 
								$arrayname[] = $val;
							}
						}	
					}	
				}
			}  
		}

		$songs_searched = array_combine($arrayid,$arrayname);

		echo '<select name="lovesong" id="lovesong" width="80%">';
		foreach($songs_searched as $key => $val){
			echo '<option value="'.$key.'">'.$val.'</option>';		
		}
		echo'</select>';
	}
}
?>