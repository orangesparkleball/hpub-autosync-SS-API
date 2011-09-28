<?php

require_once('config.php');

if(isset($_GET['key']) && $_GET['key'] == $api_key){
  header("Content-type: application/octet-stream");
  header('Content-disposition: attachment; filename=book.hpub');
  readfile('temp.hpub');
} else {
  die(json_encode(array('isError' => '0', 'code' => '-1', 'message' => 'invalid API key', 'size' => '0')));
}
?>