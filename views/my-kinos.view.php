<?php require 'partials/_header.php' ?>
<div class="max-w-screen-2xl mx-auto flex justify-between pt-20">
    <div class="text-4xl font-bold text-gray-300">My Kinos</div>
    <form class="flex items-center p-2 text-gray-500 border rounded border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
        <i class="text-2xl ph ph-magnifying-glass"></i>
        <input type="text" name="search" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" placeholder="Search kino">
    </form>
</div>
<?php
if (isset($_POST['btnRegisterKino'])) {
    require 'partials/_newkino.php';
}

if (!$kinos && !isset($_POST['btnRegisterKino'])) {
    require 'partials/_nokinos.php';
}

if (Kino::all($_REQUEST['search'] ?? '') == null){
    require 'partials/_noresults.php';
}
?>
<section class="mx-auto max-w-screen-2xl flex mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <?php foreach ($kinos as $kino) {
        require 'partials/_kino.php';
    } ?>
</section>