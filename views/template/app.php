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
        <div class="bg-green-900 border-stone-800 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
            <?= $msg ?>
        </div>
    <?php endif; ?>
    <?php require "../views/{$view}.view.php"; ?>
</body>

</html>