
<?php

  $copy = "Nothing to see here.";
  $title = "Tech Yeti v1.0";

  if(isset($_GET['404'])){
    $copy = "404: Sorry, the page you are looking for does not exist.";
    $title = "Tech Yeti: 404";
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <style type='text/css'>

      body{
      	color:#E8D9AC;
      	background-color:#FFF6D9;
      	text-align:center;
      	font-family:Helvetica, Arial;
      	font-size:50px;
      }

      .message{
      	border:6px double #E8D9AC;
      	width:500px; 
        	padding: 15px;
      	text-align:center;
      	margin:200px auto;
      	-moz-border-radius: 15px;
        -webkit-border-radius: 15px;
      	-khtml-border-radius: 15px;
      }


    </style>
  </head>
  <body>
    <div class='message'><?php echo $copy ?></div>
  </body>
</html>