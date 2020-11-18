<?php
    include 'books.php';
    $book = new Book();
    $book->deleteBook($_GET['id']);
?>
