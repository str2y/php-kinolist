<h1 class="pb-6 text-4xl text-gray-200 font-bold">Create an account</h1>
<form method="post" action="/register" class="mt-4">
    <div class="flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
        <i class="text-2xl ph ph-user"></i>
        <input type="text" name="name" placeholder="Name" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none">
    </div>
    <div class="mt-6 flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
        <i class="text-2xl ph ph-envelope"></i>
        <input type="text" name="email" placeholder="E-mail" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none">
    </div>
    <div class="mt-6 flex items-center p-3 text-gray-500 border rounded-lg border-gray-900 focus-within:text-purple-500 focus-within:border-purple-500">
        <i class="text-2xl ph ph-password"></i>
        <input type="password" name="password" placeholder="Password" class="px-2 bg-gray-950 text-lg placeholder-gray-500 text-gray-300 focus:outline-none">
    </div>
    <button name="register" type="submit" class="mt-10 w-full py-4 bg-purple-600 rounded-lg text-gray-200 text-xl transition delay-50 duration-300 ease-in-out hover:bg-purple-500 shadow hover:shadow-purple-500">
        Sign up
    </button>
</form>