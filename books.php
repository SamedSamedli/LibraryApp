<?php

include 'db.php';

class Book
{
  private $connection;

  public $id;
  public $title;
  public $description;


  public function __construct()
  {
    $dbinstance = Db::getInstance();
    $this->connection = $dbinstance->getConnection();
  }

  public function getBooks()
  { {
      $result = $this->connection->query("SELECT * from books");
      $books = array();
      while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        $books[] = $row;
      }
      return $books;
    }
  }

  public function getBook($id)
  {
    $result = $this->connection->query("SELECT * from books where id={$id}");
    return $result->fetch(PDO::FETCH_OBJ);
  }

  public function createBook($title, $description)
  {
    $result = $this->connection->query("INSERT INTO books ( title, description) VALUES ('{$title}', '{$description}')");
    if ($result) {
      header("Location:index.php?status=ok");
    } else {
      header("Location:index.php?status=error");
    }
  }


  public function deleteBook($id)
  {
    $result = $this->connection->query("DELETE FROM books WHERE books.id = {$id}");
    if ($result) {
      header("Location:index.php?status=ok");
    } else {
      header("Location:index.php?status=error");
    }
  }

  public function updateBook($id,$title,$description)
  {
    $result = $this->connection->query("UPDATE books SET title = '{$title}', description = '{$description}' WHERE books.id = {$id}");
    if ($result) {
      header("Location:index.php?status=ok");
    } else {
      header("Location:index.php?status=error");
    }
  }
}
