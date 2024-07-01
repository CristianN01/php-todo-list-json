<?php

header("Content-type: application/json");

$data = file_get_contents('./db/todolist.json');
// $dataRow = json_decode($data, true);

echo $data;

?>