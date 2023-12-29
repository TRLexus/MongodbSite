<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Book List</h1>
        <ul class="list-group">
            <?php
            // Fetch and display books from MongoDB
            $client = new MongoDB\Client("mongodb://localhost:27017");
            $collection = $client->node_mongo_crud->books;
            $books = $collection->find();

            foreach ($books as $book) {
                echo '<li class="list-group-item">' . $book['title'] . ' - ' . $book['author'] . ' - ' . $book['genre'] . ' - ' . $book['publishedYear'] . ' - ' . $book['pages'] . ' - ' . $book['language'] . ' - ' . $book['isbn'] . '</li>';
            }
            ?>
        </ul>
        <a href="add.php" class="btn btn-primary mt-3">Add Book</a>
    </div>
</body>
</html>
