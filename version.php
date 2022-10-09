<?php
header("Access-Control-Allow-Origin: *");
header('Content-type:text/json'); 
$json['ver']='0.1.7';
$json['message']='ok';
echo json_encode($json);

?>
