<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /my-kinos');
    exit();
}

if (!auth()) {
    abort(403);
}

$user_id = auth()->id;
$kino_id = $_POST['kino_id'];
$review = $_POST['review'];
$rating = $_POST['rating'];

$val = Validation::validate([
    'review' => ['required'],
    'rating' => ['required']
], $_POST);

if ($val->didntPass()) {
    header('location: /kino?id='.$kino_id);
    exit();
}

$database->query(
    "
insert into ratings (user_id, kino_id, review, rating)
values (:user_id, :kino_id, :review, :rating)",
    null,
    compact('user_id', 'kino_id', 'review', 'rating')
);

flash()->push('msg', 'Review published!');
header('location: /kino?id=' . $kino_id);
exit();