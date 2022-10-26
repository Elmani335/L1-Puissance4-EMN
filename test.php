<?php

$data = ['test' => 'Hello World'];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);

?>
