<div class="flex p-8">
    <img class="rounded-3xl w-[932px] h-[847px] object-cover" src="images/assets/Login.png" alt="">
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
                <div class="bg-red-900 border-stone-800 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <ul>
                        <li>Vixe!! Deu ruim Zé!</li>
                        <?php foreach ($vals as $val): ?>
                            <li><?= $val ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if ($vals = flash()->get('vals_register')): ?>
                <div class="bg-red-900 border-stone-800 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <ul>
                        <li>Vixe!! Deu ruim Zé!</li>
                        <?php foreach ($vals as $val): ?>
                            <li><?= $val ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>