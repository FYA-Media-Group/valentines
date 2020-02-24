<?php
//All errors shut control
error_reporting(E_ERROR | E_PARSE);

// Database details
function ServerName()
{
	return "";
}
function Username()
{
	return "databaseusername";
}
function Password()
{
	return "databasepassword";
}
function DBName()
{
	return "databasename";
}


function Connect()
{
	$servername = ServerName();
	$username = Username();
	$password = Password();
	$dbname = DBName();

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_error()) 
	{
	    die('Connect Error (' . mysqli_connect_errno() . ') '
	            . mysqli_connect_error());
	}
	return $conn;
}


function ExecuteNQ($sqlQuery)
{
	$servername = ServerName();
	$username = Username();
	$password = Password();
	$dbname = DBName();

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_error()) 
	{
	    die('Connect Error (' . mysqli_connect_errno() . ') '
	            . mysqli_connect_error());
	}
	$conn->query($sqlQuery);
	$conn->close();
}


function Filter($data) 
{
	// Every thing from form or query string must come through this function
	$data = trim($data);
	$data = str_replace("'","`",$data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


function Encode($Variable)
{
	$key = "sessionfya";
	$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $Variable, MCRYPT_MODE_CBC, md5(md5($key))));
	return $encoded;
}


function Decode($Variable)
{
	$key = "sessionfya";
	$decoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($Variable), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	return $decoded;
}


function EncodeQ($Variable)
{
	$key = "sessionfya";
	$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $Variable, MCRYPT_MODE_CBC, md5(md5($key))));
	$encoded = urlencode($encoded);
	return $encoded;
}


function DecodeQ($Variable)
{
	$key = "sessionfya";
	$decoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($Variable), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	$decoded = urldecode($decoded);
	return $decoded;
}

?>