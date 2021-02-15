<?php
$filename = "../data/available_books.json";

include_once "books_create.php";
include_once "books_read.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
   <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
<div class="booksContainer">

    <?php if (isset($books)): ?>
        <h3 style="text-align: center">Available books</h3>
        <?php foreach ($books as $book): ?>
            <div class="bookItem">
                <span class="bookHeader"><?= $book->title ?><span/><br>
                <span class="bookDescription"><?= $book->author ?>, <?= $book->year ?></span>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h3 style="text-align: center">No books available</h3>
    <?php endif; ?>

</div>
</body>

</html>