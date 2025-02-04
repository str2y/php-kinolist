<main class="mx-auto max-w-screen-2xl pb-10">
    <a href=""></a>
    <div class="flex justify-end">
        <form method="post">
            <h1>New Kino</h1>
            <div class="flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                <i class="ph ph-film-slate"></i>
                <input class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" type="text" name="title" placeholder="Title">
            </div>
            <div class="flex">
                <div class="flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                    <i class="ph ph-calendar-blank"></i>
                    <select class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" name="year">
                        <option hidden>Year</option>
                        <?php foreach (range(1900, date('Y')) as $year): ?>
                            <option value="<?= $year ?>"><?= $year ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                    <i class="ph ph-tag"></i>
                    <input class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" type="text" name="genre" placeholder="Genre">
                </div>
            </div>
            <div class="flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                <textarea name="description" placeholder="Description"></textarea>
            </div>
        </form>
    </div>
</main>