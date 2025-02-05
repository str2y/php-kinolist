<?php
if (isset($_POST['btnReset'])) {
    header('location: /my-kinos');
    exit();
}
?>

<div class="mt-16 mx-auto flex justify-center">
    <div>
        <i class="flex justify-center text-gray-600 text-6xl ph ph-film-slate"></i>
        <p class="mt-8 text-2xl text-gray-200">Kino "<?= $_REQUEST['search'] ?>" not found.</p>
            <form method="post">
                <button name="btnReset" type="submit" class="items-center gap-2 mt-5 mx-auto flex text-xl">
                    <i class="mt-0.5 text-2xl ph ph-x"></i>
                    <div>Reset filter</div>
                </button>
            </form>
    </div>
</div>
