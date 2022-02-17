<?php
require_once("geoip2.phar");
use GeoIp2\Database\Reader;
// City DB
//$reader = new Reader('/path/to/GeoLite2-City.mmdb');
//$record = $reader->city($_SERVER['REMOTE_ADDR']);
// or for Country DB

$user_ip = array(

"83.110.103.104","94.57.254.9"


);
 $reader = new Reader('E:\xampp\htdocs\iplocaiton\GeoLite2-Country.mmdb');
 
echo count($user_ip);
 
 for($i=0; $i<count($user_ip); $i++){
 $record = $reader->country($user_ip[$i]);
 print($record->country->name . "\n"); ?> <br> <?php
 }
 


//print($record->country->isoCode . "\n");
//print($record->country->name . "\n");
//print($record->country->names['zh-CN'] . "\n");
//print($record->mostSpecificSubdivision->name . "\n");
//print($record->mostSpecificSubdivision->isoCode . "\n");
//print($record->city->name . "\n");
//print($record->postal->code . "\n");
//print($record->location->latitude . "\n");
//print($record->location->longitude . "\n");
?>