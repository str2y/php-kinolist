<a href="/kino?id=<?= $kino->id ?>"
    class="flex relative border border-gray-950 hover:border-gray-900 bg-cover bg-center
    bg-[linear-gradient(to_bottom,rgba(0,0,0,.2),rgba(0,0,0,.8)),url(<?= $kino->img ?>)] w-[360px] h-[480px] rounded-2xl
    hover:bg-[linear-gradient(to_bottom,rgba(0,0,0,0.4),rgba(0,0,0,1)),url(<?= $kino->img ?>)]">
    <div class="absolute right-0 mt-4 mr-4 rounded-full bg-gray-900 p-3 opacity-90 text-gray-100 text-2xl font-bold">
        <div class="flex items-end mb-1 gap-1">
            <div class="">4,5</div>
            <div class="pb-1 text-sm font-normal tracking-[0.2em]">/5</div>
            <div class="-mb-0.5 pl-1 text-2xl">
                <i class="text-purple-500 ph-fill ph-star"></i>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 ml-8 mb-8 text-2xl text-gray-200 font-bold">
        <?= $kino->title ?>
        <ul class="mt-2 flex text-lg text-gray-500 font-medium gap-6">
            <li>
                <?= $kino->genre ?>
            </li>
            <li class="list-disc">
                <?= $kino->year ?>
            </li>
        </ul>
    </div>
</a>