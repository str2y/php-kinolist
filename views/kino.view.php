<?php require 'partials/_header.php' ?>

<div class="flex bg-center bg-cover bg-[linear-gradient(rgba(3,7,18,.7),rgba(3,7,18,1)),url(<?= $kino->img ?>)]">
    <main class="flex pb-40 pt-20 max-w-screen-xl mx-auto">
        <div class="relative bg-cover bg-center shadow-2xl shadow-gray-700/50 bg-[url(<?= $kino->img ?>)] min-w-[480px] min-h-[640px] rounded-2xl">
        </div>
        <div class="ml-20 mt-3">
            <button class="flex items-center gap-1.5">
                <i class="text-xl font-bold ph ph-arrow-left"></i>
                <div class="text-lg mb-0.5">Back</div>
            </button>
            <h1 class="mt-8 text-3xl text-gray-200 font-bold"><?= $kino->title ?></h1>
            <div class="mt-6 text-gray-400 text-lg font-semibold">
                <ul class="flex gap-1 my-1">
                    <li>Genre:</li>
                    <li class="font-normal"><?= $kino->genre ?></li>
                </ul>
                <ul class="flex gap-1">
                    <li>Year:</li>
                    <li class="font-normal"><?= $kino->year ?></li>
                </ul>
                <div class="mt-6 text-4xl"><?= str_repeat('<i class="text-purple-500 ph-fill ph-star"></i>', $kino->rating_score) ?></div>
            </div>
            <p class="mt-20 text-lg text-gray-400"><?= $kino->description ?></p>
        </div>
    </main>
</div>
<div class="justify-between items-center flex max-w-screen-xl mx-auto">
    <h1 class="text-2xl text-gray-200 font-semibold">Reviews</h1>
    <button class="bg-purple-600 px-4 py-3 rounded-lg text-gray-200 flex items-center gap-1.5">
        <i class="text-xl ph ph-star"></i>
        <div class="mb-0.5 text-lg">Review Kino</div>
    </button>
</div>
<section class="max-w-screen-xl mx-auto mt-10 space-y-4">
    <?php foreach ($ratings as $rating) : ?>
        <?php require 'partials/_ratings.php'; ?>
    <?php endforeach; ?>
</section>