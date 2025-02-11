<?php require 'partials/_header.php' ?>

<?php if (!isset($_POST['btnReview'])) {
    require 'partials/_kinoview.php';
}else{
    require 'partials/_newrating.php';
}
?>

<?php
if ($ratings && !isset($_POST['btnReview'])) {
    echo '<section class="max-w-screen-xl mx-auto mt-10 space-y-4">';
    foreach ($ratings as $rating) : ?>
        <?php require 'partials/_ratings.php'; ?>
    <?php endforeach;
    echo '</section>';
} else if(!$ratings && !isset($_POST['btnReview'])) {
    require 'partials/_noratings.php';
}
    ?>