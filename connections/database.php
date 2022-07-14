<?php 

session_start();

date_default_timezone_set("Asia/Manila");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_palanginan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


function encrypt($string)
	{
		$simple_string = $string;
		$ciphering = "AES-128-CTR";
		// Use OpenSSl Encryption method
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;

		// Non-NULL Initialization Vector for encryption
		$encryption_iv = '1234567891011121';  
		// Store the encryption key
		$encryption_key = "landogz";

		// Use openssl_encrypt() function to encrypt the data
		return openssl_encrypt($simple_string, $ciphering,
		            $encryption_key, $options, $encryption_iv);
	}

function decrypt($string)
	{
		$simple_string = $string;
		$ciphering = "AES-128-CTR";
		// Use OpenSSl Encryption method
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;

		// Non-NULL Initialization Vector for encryption
		$encryption_iv = '1234567891011121';  
		// Store the encryption key
		$encryption_key = "landogz";

		// Use openssl_encrypt() function to encrypt the data
		return openssl_decrypt($simple_string, $ciphering,
		            $encryption_key, $options, $encryption_iv);
	}
  

?>
