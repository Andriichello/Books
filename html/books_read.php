<?php
global $filename;

if (!isset($filename)) {
    echo "filename wasn't set<br/>";
    $filename = "../data/available_books.json";
}

$json = file_get_contents($filename, true);
$books = json_decode($json);