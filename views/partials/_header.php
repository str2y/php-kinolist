<header class="flex border border-gray-800">
    <nav class="justify-between w-full items-center flex px-8 py-4">
        <div class="flex">
            <img class="h-20" src="images/assets/Logo.svg" alt="Logo">
        </div>
        <menu class="ml-28 rounded-lg flex text-2xl gap-20">
            <a class="rounded-lg" href="/">
                <button class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-900 focus-within:bg-gray-900 focus-within:text-purple-500 duration-200 focus:outline-none">
                    <i class="ph ph-popcorn"></i>
                    Explore
                </button>
            </a>
            <a class="rounded-lg" href="/my-kinos">
                <button class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-900 focus-within:bg-gray-900 focus-within:text-purple-500 duration-200">
                    <i class="ph ph-film-slate"></i>
                    My Kinos
                </button>
            </a>
        </menu>
        <menu class="items-center text-lg text-gray-300 flex gap-4">
            <div class="flex items-center gap-2">
                <?php if (auth()): ?>
                    <a href="/logout" class="hover:underline">Oi, asdf</a>
                <?php else: ?>
                    <a href="/login" class="hover:underline">Login</a>
                <?php endif; ?>
                <button class="flex items-center bg-gray-900 rounded-lg px-2.5 py-2 hover:bg-gray-900 text-gray-500 hover:text-purple-500">
                    <i class="text-4xl ph ph-user"></i>
                </button>
            </div>
            <div class="min-h-12 border border-gray-900"></div>
            <a class="rounded-lg" href="/">
                <button class="flex items-center bg-gray-900 rounded-lg px-2.5 py-2 hover:bg-gray-900 text-gray-500 hover:text-purple-500">
                    <i class="text-4xl ph ph-sign-out"></i>
                </button>
            </a>
        </menu>
    </nav>
</header>