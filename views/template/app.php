<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <title>The Kino List</title>
</head>
<body class="bg-gray-950 text-gray-500">
    <?php if ($msg = flash()->get('msg')): ?>
        <div class="flex place-content-center mx-1.5 my-1 bg-purple-950 border-gray-800 text-purple-500 px-4 py-1 rounded border text-lg font-semibold">
            <div><?= $msg ?></div>
        </div>
    <?php endif; ?>
    <?php require "../views/{$view}.view.php"; ?>
</body>

</html>