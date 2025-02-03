<header class="flex border border-gray-800">
    <nav class="justify-between w-full items-center flex px-8 py-4">
        <div class="flex">
            <img class="h-20" src="images/assets/Logo.svg" alt="Logo">
        </div>
        <menu class="ml-28 rounded-lg flex text-2xl gap-20">
            <a class="rounded-lg" href="/">
                <button autofocus class="flex items-center gap-3 px-4 py-2 rounded-lg transition ease-in-out delay-50 hover:bg-gray-900 focus-within:bg-gray-900 focus-within:text-purple-500 duration-200 focus:outline-none">
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
                    <a href="/logout" class="hover:underline">Oi, <?= auth()->name ?></a>
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
<main class="mx-auto max-w-screen-2xl pb-10">
    <div class="flex justify-between pt-20">
        <div class="text-4xl font-bold text-gray-300">Explore</div>
        <!-- search -->
        <form class="flex items-center p-2 text-gray-500 border rounded border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
            <i class="text-2xl ph ph-magnifying-glass"></i>
            <input type="text" name="search" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" placeholder="Search kino">
        </form>
    </div>
    <!-- movies list -->
    <section class="max-w-screen-2xl flex mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ($kinos as $kino) {
            require 'partials/_kino.php';
        } ?>
    </section>
</main>