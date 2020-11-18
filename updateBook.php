<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CarApp v1.0</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="/car">Home</a>
                    <a class="nav-link active" href="/car/createcar.php">Create Book</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    include 'books.php';
    $book = new Book();
    $bookToBeEdited = $book->getBook($_GET['id']);
    ?>

    <div class="container">
        <form action="updateBookprocess.php" method="POST" class="mt-4">
            <input type="hidden" name="id" value="<?php echo $bookToBeEdited->id; ?>">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo $bookToBeEdited->title; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $bookToBeEdited->description; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a class="btn btn-primary" href='/book'>Back to list</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>