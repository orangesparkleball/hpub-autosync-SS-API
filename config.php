<?php

$shared_secret = 'This is a super top secret string!';
$time_factor = gmdate('m/d/y h');

$api_key = md5(md5($shared_secret).md5($time_factor));

?>