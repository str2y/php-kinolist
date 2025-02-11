<?php

$kino = Kino::get($_GET['id']);

$ratings = $database->query(
    "select ratings.*, users.name
         from ratings
         inner join users on ratings.user_id = users.id
         where kino_id = :id",
    Validation::class,
    ['id' => $_GET['id']]
)->fetchAll();

view('kino', compact('kino', 'ratings'));
