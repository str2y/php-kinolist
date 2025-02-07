<?php require 'partials/_header.php' ?>

<div class="flex bg-center bg-cover bg-[linear-gradient(rgba(3,7,18,.7),rgba(3,7,18,1)),url(<?= $kino->img ?>)]">
    <main class="flex pb-40 pt-28 max-w-screen-2xl mx-auto">
        <div class="relative bg-cover bg-center shadow-2xl shadow-gray-700/50 bg-[url(<?= $kino->img ?>)] min-w-[480px] min-h-[640px] rounded-2xl">
        </div>
        <div class="ml-32 mr-52">
            <button>
                <i></i>
                <div>Back</div>
            </button>
            <h1 class="mt-6 text-3xl text-gray-200 font-bold"><?= $kino->title ?></h1>
            <div class="mt-8 text-gray-400 font-semibold">
                <ul class="flex gap-1 my-1">
                    <li>Genre:</li>
                    <li class="font-normal"><?= $kino->genre ?></li>
                </ul>
                <ul class="flex gap-1">
                    <li>Year:</li>
                    <li class="font-normal"><?= $kino->year ?></li>
                </ul>
                <div class="mt-4 text-2xl"><?= str_repeat('⭐', $kino->rating_score) ?></div>
            </div>
            <p class="mt-16 text-lg text-gray-400"><?= $kino->description ?></p>
        </div>
    </main>
</div>