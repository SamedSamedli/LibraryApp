<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="book.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/59d028c6ad.js" crossorigin="anonymous"></script>
    <title>Library</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/book">Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="/book">Home</a>
                    <a class="nav-link active" href="/book/createBook.php">Create Book</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == "ok") {
    ?>
            <div class="alert alert-success text-center mt-4" role="alert">
                Success!
            </div>
        <?php
        } elseif ($_GET['status'] == "error") {
        ?>
            <div class="alert alert-danger text-center mt-4" role="alert">
                Error!
            </div>
    <?php
        }
    }
    ?>
    <div class="container">
        <table class="table table-hover table-stripped text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php

                include 'books.php';
                $book = new Book();
                $booksFromDb = $book->getBooks();
                $html = '';
                foreach ($booksFromDb as $i => $book) {
                    $html .= '<tr>';
                    $html .= "<td>{$book->id}</td>";
                    $html .= "<td>{$book->title}</td>";
                    $html .= "<td>{$book->description}</td>";
                    $html .= "<td><a href='/book/deleteBookprocess.php?id={$book->id}' class='btn btn-danger'><i class='fas fa-trash'></i></a> <a href='/book/updateBook.php?id={$book->id}' class='btn btn-warning'><i class='fas fa-pen'></i></a></td>";
                    $html .= "<td></td>";
                    $html .= '</tr>';
                    echo $html;
                    $html = "";
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-success mt-4" href='/book/createBook.php'>Create car</a>
    </div>

</body>

</html>