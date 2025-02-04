<?php require 'partials/_header.php' ?>
<?php
if (isset($_POST['btnRegisterKino'])) {
    require 'partials/_newkino.php';
} else if (!isset($_POST['btnRegisterKino'])) {
    require 'partials/_nokinos.php';
} else if ($kinos == null) {
    require 'partials/_nokinos.php';
} else if ($_REQUEST['search']) {
    require 'partials/_noresults.php';
} ?>

<section class="max-w-screen-2xl flex mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <?php foreach ($kinos as $kino) {
        require 'partials/_kino.php';
    } ?>
</section>