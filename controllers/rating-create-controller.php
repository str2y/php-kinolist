<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /');
    exit();
}

$user_id = auth()->id;
$kino_id = $_POST['kino_id'];
$review = $_POST['review'];
$rating = $_POST['rating'];

$validacao = Validation::validate([
    'review' => ['required'],
    'rating' => ['required']
], $_POST);

if ($validacao->didntPass()) {
    header('location: /livro?id='.$kino_id);
    exit();
}

$database->query(
    "
insert into ratings (user_id, kino_id, review, rating)
values (:user_id, :kino_id, :review, :rating)",
    null,
    compact('user_id', 'kino_id', 'review', 'rating')
);

flash()->push('msg', 'Review posted!');
header('location: /livro?id=' . $kino_id);
exit();
