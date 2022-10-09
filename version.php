<?php
header("Access-Control-Allow-Origin: *");
header('Content-type:text/json'); 
$json['ver']='0.1.6';
$json['message']='ok';
echo json_encode($json);

?>
