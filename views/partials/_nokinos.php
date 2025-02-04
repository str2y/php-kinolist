<main class="mx-auto max-w-screen-2xl pb-10">
    <div class="flex justify-between pt-20">
        <div class="text-4xl font-bold text-gray-300">My Kinos</div>
        <form class="flex items-center p-2 text-gray-500 border rounded border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
            <i class="text-2xl ph ph-magnifying-glass"></i>
            <input type="text" name="search" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" placeholder="Search kino">
        </form>
    </div>
    <div class="mt-16 mx-auto flex justify-center">
        <div>
            <i class="flex justify-center text-gray-600 text-6xl ph ph-film-slate"></i>
            <p class="flex justify-center mt-8 text-2xl text-gray-200">
                No Kinos registered.
            </p>
            <form method="post">
                <button name="btnRegisterKino" type="submit" class="items-center gap-2 mt-5 mx-auto flex text-xl">
                    <i class="mt-0.5 text-2xl ph ph-plus"></i>
                    <div>Register your first movie</div>
                </button>
            </form>
        </div>
    </div>
</main>