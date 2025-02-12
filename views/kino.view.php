<?php require 'partials/_header.php' ?>

<?php if (($vals = flash()->get('vals_rating'))): ?>
    <div class="mt-4 bg-red-950 border-2 border-gray-800 text-red-500 px-4 py-1 rounded-md border text-lg font-mono tracking-tighter">
        <ul>
            <li>Uh, oh!</li>
            <?php foreach ($vals as $val): ?>
                <li><?= $val ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (!isset($_POST['btnReview'])) {
    require 'partials/_kinoview.php';
} else {
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
} else if (!$ratings && !isset($_POST['btnReview'])) {
    require 'partials/_noratings.php';
}
?>