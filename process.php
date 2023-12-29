<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data and insert into MongoDB
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->node_mongo_crud->books;

    $book = [
        'title' => $_POST['title'],
        // Add other form fields as needed
    ];

    $collection->insertOne($book);

    header("Location: index.php");
    exit;
}
