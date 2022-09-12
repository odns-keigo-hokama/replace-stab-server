<?php

$path = $_GET['seqno'] . '.json';

$jsonData = file_get_contents($path);
echo $jsonData;