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
                    <a href="/login" class="hover:underline">Login</a>
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
        <div class="flex justify-between pt-20">
            <div class="text-4xl font-bold text-gray-300">Explore</div>
            <div class="flex items-center px-2 py-2 text-gray-500 border rounded border-gray-700 focus-within:text-purple-500 focus-within:border-purple-500">
                <i class="text-2xl ph ph-magnifying-glass"></i>
                <input type="text" name="search" class="px-2 bg-gray-900 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" placeholder="Search kino">
            </div>
        </div>
        <!-- movies list -->
        <section class="h-screen mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="min-h-1/2 p-2 rounded-2xl border-stone-800 border-2 bg-stone-900">
                <div class="flex gap-2">
                    <div class="w-1/3">
                        <img src="" class="w-60 rounded">
                    </div>
                    <div class="flex flex-col gap-1">
                        <a href="/" class="font-semibold hover:underline">nome</a>
                        <div class="text-xs italic">genero</div>
                        <div class="text-xs italic">nota</div>
                    </div>
                </div>
            </div>
            <div class="min-h-1/2 p-2 rounded-2xl border-stone-800 border-2 bg-stone-900">
                <div class="flex gap-2">
                    <div class="w-1/3">
                        <img src="" class="w-60 rounded">
                    </div>
                    <div class="flex flex-col gap-1">
                        <a href="/" class="font-semibold hover:underline">nome</a>
                        <div class="text-xs italic">genero</div>
                        <div class="text-xs italic">nota</div>
                    </div>
                </div>
            </div>
            <div class="min-h-1/2 p-2 rounded-2xl border-stone-800 border-2 bg-stone-900">
                <div class="flex gap-2">
                    <div class="w-1/3">
                        <img src="" class="w-60 rounded">
                    </div>
                    <div class="flex flex-col gap-1">
                        <a href="/" class="font-semibold hover:underline">nome</a>
                        <div class="text-xs italic">genero</div>
                        <div class="text-xs italic">nota</div>
                    </div>
                </div>
            </div>
            <div class="min-h-1/2 p-2 rounded-2xl border-stone-800 border-2 bg-stone-900">
                <div class="flex gap-2">
                    <div class="w-1/3">
                        <img src="" class="w-60 rounded">
                    </div>
                    <div class="flex flex-col gap-1">
                        <a href="/" class="font-semibold hover:underline">nome</a>
                        <div class="text-xs italic">genero</div>
                        <div class="text-xs italic">nota</div>
                    </div>
                </div>
            </div>
            <div class="min-h-1/2 p-2 rounded-2xl border-stone-800 border-2 bg-stone-900">
                <div class="flex gap-2">
                    <div class="w-1/3">
                        <img src="" class="w-60 rounded">
                    </div>
                    <div class="flex flex-col gap-1">
                        <a href="/" class="font-semibold hover:underline">nome</a>
                        <div class="text-xs italic">genero</div>
                        <div class="text-xs italic">nota</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>