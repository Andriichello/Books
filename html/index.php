<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "../logic/books_create_available.php";
$books = include_once "../logic/books_read_available.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div class="booksContainer">

        <?php if (!empty($books)): ?>
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