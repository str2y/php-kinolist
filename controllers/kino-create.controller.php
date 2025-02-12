<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /my-kinos');
    exit();
}

if (!auth()) {
    abort(403);
}

$user_id = auth()->id;
$title = $_POST['title'];
$genre = $_POST['genre'];
$year = $_POST['year'];
$description = $_POST['description'];

$val = Validation::validate([
    'title' => ['required', 'min:3'],
    'genre' => ['required'],
    'year' => ['required'],
    'description' => ['required'],
], $_POST);

if ($val->didntPass('kino')) {
    header('location: /my-kinos');
    exit();
}

$newImageName = md5(rand());
$suffix = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
$img = "images/$newImageName.$suffix";
move_uploaded_file($_FILES['img']['tmp_name'], __DIR__.'/../public/'.$img);

$database->query(
    "insert into kinos ( title, genre, year, description, user_id, img )
    values ( :title, :genre, :year, :description, :user_id, :img )",
    null,
    compact('title', 'genre', 'year', 'description', 'user_id', 'img')
);

flash()->push('msg', 'Kino registered!');
header('location: /my-kinos');
exit();