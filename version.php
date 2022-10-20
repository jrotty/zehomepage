<?php
header("Access-Control-Allow-Origin: *");
header('Content-type:text/json');
$json['ver']='20221020';
$json['version']='0.2.1';
$json['message']='ok';
echo json_encode($json);


?>