<?php
    include 'books.php';
    $book = new Book();
    $book->updateBook($_POST['id'],$_POST['title'],$_POST['description']);
?>