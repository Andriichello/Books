<?php
$filename = "../data/available_books.json";

$json = file_get_contents($filename, true);
return json_decode($json);
?>