<?php

$shared_secret = 'This is a super top secret string!';
$time_factor = date('m/d/y h');

$api_key = md5(md5($shared_secret).md5($time_factor));

if(isset($_GET['key']) && $_GET['key'] == $api_key){
  die(json_encode(array('isError' => '0', 'code' => '1', 'message' => 'An update is available', 'size' => '5000'))); 
} else {
  die(json_encode(array('isError' => '0', 'code' => '-1', 'message' => 'invalid API key', 'size' => '0')));
}
?>