<?php

$file = file_get_contents('devpp.json');
$json = json_decode($file);
$random = mt_rand(1,count($json));
echo $json[$random]->Nome;