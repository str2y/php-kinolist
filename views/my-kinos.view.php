<?php require 'partials/_header.php' ?>
<div class="max-w-screen-2xl mx-auto flex justify-between pt-20">
    <div class="text-4xl font-bold text-gray-300">My Kinos</div>
    <div class="flex gap-5">
        <form class="flex items-center p-2 text-gray-500 border rounded border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
            <i class="text-2xl ph ph-magnifying-glass"></i>
            <input type="text" name="search" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" placeholder="Search kino">
        </form>
        <div class="border border-gray-800"></div>
        <form method="post">
            <button name=btnRegisterKino type="submit" class="gap-3 flex px-5 py-3 bg-purple-600 rounded-lg text-gray-200 text-xl transition delay-50 duration-300 ease-in-out hover:bg-purple-500 shadow hover:shadow-purple-500">
                <i class="text-2xl ph ph-plus"></i>
                <div class="flex place-self-center mb-0.5">New</div>
            </button>
        </form>
    </div>
</div>
<?php
if (isset($_POST['btnRegisterKino'])) {
    require 'partials/_newkino.php';
}

if (!$kinos && !isset($_POST['btnRegisterKino'])) {
    require 'partials/_nokinos.php';
}

if (Kino::all($_REQUEST['search'] ?? '') == null) {
    require 'partials/_noresults.php';
}
?>
<section class="mx-auto max-w-screen-2xl flex mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <?php
    if (!isset($_POST['btnRegisterKino'])) {
        foreach ($kinos as $kino) {
            require 'partials/_kino.php';
        }
    } ?>
</section>