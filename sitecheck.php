<?php 
 

//$url = "www.contraloria.nayarit.gob.mx";
$url = $_GET['u'];


$response = fsockopen($url, 80, $errno, $errstr, 30); 

var_dump($response); 

echo "<hr>";
function url_test( $url ) {
	$timeout = 10;
	$ch = curl_init();
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_TIMEOUT, $timeout );
	$http_respond = curl_exec($ch);
	$http_respond = trim( strip_tags( $http_respond ) );
	$http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
	if ( ( $http_code == "200" ) || ( $http_code == "302" ) ) {
		return true;
	} else {
		// you can return $http_code here if necessary or wanted
		return false;
	}
	curl_close( $ch );
}

if( !url_test( $url ) ) {
	echo $url ." esta caído";
} else {
	echo $url ." funciona correctamente.";
}

 
?> 

