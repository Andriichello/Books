<?php

$books = [
    (object)[
        'title' => 'Sweetbitter',
        'author' => 'Stephanie Danler',
        'year' => 2016
    ],
    (object)[
        'title' => 'M Train',
        'author' => 'Stephanie Danler',
        'year' => 2015
    ],
    (object)[
        'title' => 'Homeland Elegies',
        'author' => 'Ayad Akhtar',
        'year' => 2020
    ],
    (object)[
        'title' => 'Flash Boys: A Wall Street Revolt',
        'author' => 'Michael Lewis',
        'year' => 2014
    ],
    (object)[
        'title' => 'The Orphan\'s Tale',
        'author' => 'Pam Jenoff',
        'year' => 2017
    ],
];

global $filename;
if (!isset($filename)) {
    echo "filename wasn't set<br/>";
    $filename = "../data/available_books.json";
}

file_put_contents($filename, json_encode($books));
