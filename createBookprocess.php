<?php
    include 'books.php';
    $book = new Book();
    $book->createBook($_POST['title'],$_POST['description']);
?>