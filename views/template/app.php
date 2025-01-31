<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <title>The Kino List</title>
</head>

<body class="bg-gray-900 text-gray-500">
    <header class="flex border border-gray-800">
        <nav class="justify-between w-full items-center flex px-8 py-4">
            <div class="flex">
                <img class="h-20" src="assets/Vector/Logo.svg" alt="Logo">
            </div>
            <menu class="ml-28 rounded-lg flex text-2xl gap-20">
                <a class="rounded-lg" href="/">
                    <button class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-800 focus-within:bg-gray-700 focus-within:text-purple-500 duration-200">
                        <i class="ph ph-popcorn"></i>
                        Explore
                    </button>
                </a>
                <a class="rounded-lg" href="/my-kinos">
                    <button class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-800 focus-within:bg-gray-700 focus-within:text-purple-500 duration-200">
                        <i class="ph ph-film-slate"></i>
                        My Kinos
                    </button>
                </a>
            </menu>
            <menu class="items-center text-lg text-gray-300 flex gap-4">
                <div class="flex items-center gap-2">
                    <?php if (auth()): ?>
                        <a href="/logout" class="hover:underline">Oi, <?= auth()->name ?></a>
                    <?php else: ?>
                        <a href="/login" class="hover:underline">Login</a>
                    <?php endif; ?>
                    <button class="flex items-center bg-gray-800 rounded-lg px-2.5 py-2 hover:bg-gray-700 text-gray-500 hover:text-purple-500">
                        <i class="text-4xl ph ph-user"></i>
                    </button>
                </div>
                <div class="min-h-12 border border-gray-700"></div>
                <a class="rounded-lg" href="/">
                    <button class="flex items-center bg-gray-800 rounded-lg px-2.5 py-2 hover:bg-gray-700 text-gray-500 hover:text-purple-500">
                        <i class="text-4xl ph ph-sign-out"></i>
                    </button>
                </a>
            </menu>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-2xl pb-10">
        <?php if ($msg = flash()->get('msg')): ?>
            <div class="bg-green-900 border-stone-800 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                <?= $msg ?>
            </div>
        <?php endif; ?>
        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>

</html>