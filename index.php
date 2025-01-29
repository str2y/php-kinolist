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
            <ul class="ml-28 rounded-lg flex text-2xl gap-20">
                <li class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-800 active:bg-gray-700 active:text-purple-500 duration-200"><i class="ph ph-popcorn"></i><a href="/">Explore</a></li>
                <li><a href="/my-kinos" class="px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-800 active:bg-gray-700 active:text-purple-500 duration-200">My Kinos</a></li>
            </ul>
            <ul class="text-lg text-gray-300 flex gap-6">
                <li>Hello, user</li>
                <li>Logout</li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-2xl pb-10">
        <div class="flex justify-between pt-20">
            <div class="text-3xl font-bold text-gray-300">Explore</div>
            <form class="flex space-x-2 text-gray-500">
                <input type="text" name="pesquisar" class="border-gray-700 border rounded bg-gray-900 text-lg focus:outline-none px-4 py-2" placeholder="Search kino">
                <button type="submit">🔍</button>
            </form>
        </div>
        <!-- movies list -->
        <section class="flex grid grid-cols-1 md:grid-cols-2 lg:grid-cols gap-4">
        </section>
    </main>
</body>

</html>