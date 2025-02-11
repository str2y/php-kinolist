<div class="p-8 rounded-xl bg-gray-900 grid grid-cols-10">
    <div class="border-r-2 border-gray-800 col-span-2 flex">
        <i class="text-6xl ph ph-user"></i>
        <div class="space-y-1 ml-6">
            <div class="text-lg text-gray-200"><?= $rating->name ?></div>
            <div>x kinos reviewed</div>
        </div>
    </div>
    <div class="ml-10 col-span-7 text-lg"><?= $rating->review ?></div>
    <div class="justify-self-end text-2xl"><?= str_repeat('<i class="text-purple-500 ph-fill ph-star"></i>', $rating->rating) ?></div>
</div>