<?php
$url1='https://www.nayarit.gob.mx/HTML/despacho.html';
//$url1 = $_GET['https://www.nayarit.gob.mx/HTML/despacho.html'];
// Function to check response time
function pingDomain($domain){
    $starttime = microtime(true);
  //  $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}
echo pingDomain($url1);
?>