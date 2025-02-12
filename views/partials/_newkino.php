<form method="post" action="/kino-create" class="flex mx-auto max-w-screen-2xl mt-24 gap-24" enctype="multipart/form-data">
    <label for="upload" class="items-center flex rounded-3xl bg-gray-900 min-h-[640px] min-w-[480px]">
        <input hidden type="file" name="img" id="upload">
        <div class="mx-auto">
            <i class="flex justify-center text-purple-500 text-7xl ph ph-upload-simple"></i>
            <div class="mt-1.5 text-lg">Upload image</div>
        </div>
    </label>
    <div class="w-full">
        <h1 class="text-2xl text-gray-300 font-bold">New Kino</h1>
        <div class="mx-auto mt-8 flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
            <i class="ph ph-film-slate"></i>
            <input class="w-full px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" type="text" name="title" placeholder="Title">
        </div>
        <div class="flex mt-4 gap-4">
            <div class="min-w-[360px] flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                <i class="ph ph-calendar-blank"></i>
                <select class="w-full px-2 bg-gray-950 text-lg text-gray-300 focus:outline-none" name="year">
                    <option selected value="">Year</option>
                    <?php foreach (range(date('Y') - 100, date('Y')) as $year): ?>
                        <option value="<?= $year ?>"><?= $year ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="w-full flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                <i class="ph ph-tag"></i>
                <input class="w-full px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" type="text" name="genre" placeholder="Genre">
            </div>
        </div>
        <div class="mt-4 p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
            <textarea maxlength="1024" class="h-[240px] resize-none w-full px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" name="description" placeholder="Description"></textarea>
        </div>
        <div class="mt-40 gap-16 justify-end flex mt-4">
            <button type="reset" class="rounded-lg text-xl">
                Cancel
            </button>
            <button type="submit" name="btnSaveKino" class="px-6 py-3 bg-purple-600 rounded-lg text-gray-200 text-xl transition delay-50 duration-300 ease-in-out hover:bg-purple-500 shadow hover:shadow-purple-500">
                Save
            </button>
        </div>
    </div>
</form>