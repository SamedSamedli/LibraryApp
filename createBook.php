<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
    <div class="container">
        <form action="createBookProcess.php" method="POST" class="mt-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Description" name="description">
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-success">Add</button>
                    <a class="btn btn-primary" href='/book'>Back to list</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>