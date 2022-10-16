<?php
header("Access-Control-Allow-Origin: *");
header('Content-type:text/json'); 
$json['ver']='0.2.0';
$json['message']='ok';
echo json_encode($json);

?>
