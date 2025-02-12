<div class="flex bg-center bg-cover bg-[linear-gradient(rgba(3,7,18,.7),rgba(3,7,18,1)),url(<?= $kino->img ?>)]">
    <div class="w-[600px] bg-gray-950 bg-opacity-40 mt-16 justify-center max-w-screen-sm mx-auto border border-gray-800 rounded-3xl">
        <form class="px-16 pt-10 pb-8 justify-center" method="post" action="/rating-create">
            <input type="hidden" name="kino_id" value="<?= $kino->id ?>">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-gray-200">Review kino</h1>
                <a class="rounded-lg" href="/kino?id=<?= $kino->id ?>">
                    <button type="reset" class="flex items-center bg-gray-900 rounded-lg px-2.5 py-2 hover:bg-gray-900 text-gray-500 hover:text-purple-500">
                        <i class="text-2xl ph ph-x"></i>
                    </button>
                </a>
            </div>
            <div class="mt-12 flex gap-12">
                <div class="relative bg-cover bg-center shadow-lg shadow-gray-700/20 bg-[url(<?= $kino->img ?>)] min-w-[200px] min-h-[300px] rounded-2xl"></div>
                <div>
                    <h1 class="text-3xl text-gray-200 font-semibold"><?= $kino->title ?></h1>
                    <div class="mt-6 text-gray-400 text-lg font-semibold">
                        <ul class="flex gap-1 my-1">
                            <li>Genre:</li>
                            <li class="font-normal"><?= $kino->genre ?></li>
                        </ul>
                        <ul class="flex gap-1">
                            <li>Year:</li>
                            <li class="font-normal"><?= $kino->year ?></li>
                        </ul>
                        <p class="font-normal mt-6">Your rating</p>
                        <input type="hidden" name="rating" id="hiddenRating">
                        <div id="rating" class="flex mt-1 text-purple-500">
                            <svg class="text-purple-500 hover:fill-current" width="28" height="28" fill="none" viewBox="0 0 256 256" stroke="currentColor">
                                <path stroke-width="10" d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                            <svg class="text-purple-500 hover:fill-current" width="28" height="28" fill="none" viewBox="0 0 256 256" stroke="currentColor">
                                <path stroke-width="10" d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                            <svg class="text-purple-500 hover:fill-current" width="28" height="28" data-value="3" fill="none" viewBox="0 0 256 256" stroke="currentColor">
                                <path stroke-width="10" d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                            <svg class="text-purple-500 hover:fill-current" width="28" height="28" data-value="4" fill="none" viewBox="0 0 256 256" stroke="currentColor">
                                <path stroke-width="10" d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                            <svg class="text-purple-500 hover:fill-current" width="28" height="28" data-value="5" fill="none" viewBox="0 0 256 256" stroke="currentColor">
                                <path stroke-width="10" d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                        </div>
                        <script>
                            const stars = document.querySelectorAll('#rating svg');
                            const ratingInput = document.getElementById('hiddenRating');
                            let rating = 0;

                            stars.forEach((star, index) => {
                                star.addEventListener('click', () => {
                                    rating = index + 1;
                                    updateStars(rating);
                                    ratingInput.value = rating;
                                });
                            });

                            function updateStars(rating) {
                                stars.forEach((star, i) => {
                                    if (i < rating) {
                                        star.classList.add('fill-current');
                                    } else {
                                        star.classList.remove('fill-current');
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="mt-10 p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
                <textarea maxlength="1024" class="h-[128px] resize-none w-full px-2 bg-gray-950 bg-opacity-0 text-lg placeholder-gray-500 text-gray-300 focus:outline-none" name="review" placeholder="Review"></textarea>
            </div>
            <div class="flex justify-end">
                <div class="mt-4 justify-end flex">
                    <button type="submit" class="px-6 py-3 bg-purple-600 rounded-lg text-gray-200 text-xl transition delay-50 duration-300 ease-in-out hover:bg-purple-500 shadow hover:shadow-purple-500">
                        Publish
                    </button>
                </div>
        </form>
    </div>
</div>