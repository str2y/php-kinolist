<?php

$kino = Kino::get($_GET['id']);

$ratings = $database->query(
    "select * from ratings where kino_id = :id",
    Validation::class,
    ['id' => $_GET['id']]
)
    ->fetchAll();

view('kino', compact('kino', 'ratings'));