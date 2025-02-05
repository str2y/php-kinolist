<div class="flex p-8">
    <div class="relative rounded-3xl w-[932px] h-[847px] bg-center bg-cover bg-[url(images/assets/Login.png)]">
        <div class="font-mono font-semibold text-gray-200 absolute bottom-0 ml-16 mb-24">
            <h1 class="text-7xl">The</h1>
            <p class="text-5xl mt-4 ml-12">Kino List</p>
        </div>
    </div>
    <div class="mt-44 mx-auto items-center">
        <form method="post" class="px-1 py-1 bg-gray-900 rounded-lg text-lg">
            <button name="btnLogin" type="submit" class="items-center gap-3 px-20 py-3 rounded-lg focus-within:bg-gray-800 focus-within:text-purple-500 focus:outline-none">
                Login
            </button>
            <button name="btnRegister" type="submit" class="items-center gap-3 px-20 py-3 rounded-lg focus-within:bg-gray-800 focus-within:text-purple-500 focus:outline-none">
                Sign up
            </button>
        </form>
        <div class="pt-20">
            <?php
            if (!isset($_POST['btnRegister'])) {
                require 'partials/_login.php';
            } else if (isset($_POST['btnLogin'])) {
                require 'partials/_login.php';
            }
            if (isset($_POST['btnRegister'])) {
                require 'partials/_register.php';
            }
            ?>
            <?php if ($vals = flash()->get('vals_login')): ?>
                <div class="mt-4 bg-red-950 border-2 border-gray-800 text-red-500 px-4 py-1 rounded-md border text-lg font-mono tracking-tighter">
                    <ul>
                        <li>Uh, oh!</li>
                        <?php foreach ($vals as $val): ?>
                            <li><?= $val ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if ($vals = flash()->get('vals_register')): ?>
                <div class="mt-4 bg-red-950 border-2 border-gray-800 text-red-500 px-4 py-1 rounded-md border text-lg font-mono tracking-tighter">
                    <ul>
                        <li>Uh, oh!</li>
                        <?php foreach ($vals as $val): ?>
                            <li><?= $val ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>