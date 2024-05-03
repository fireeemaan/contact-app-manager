<body class="bg-[url('public/assets/img/blob-scene-haikei.svg')] bg-cover">
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-[20rem] max-w-md p-6 bg-white backdrop-blur-xl bg-opacity-5 shadow-2xl drop-shadow-md rounded-lg">
            <h2 class="text-center justify-center font-bold text-2xl mb-4 text-purple-600">Register</h2>
            <form action="<?= urlpath('register') ?>" method="POST" class="flex flex-col">
                <input type="text" name="name"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Name" required>
                <input type="text" name="username"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Username" required>
                <input type="password" name="password"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Password">
                <input type="password" name="confirm_password"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Confirm Password">
                <!--            <button type="submit" class="bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Register</button>-->

                <button type="submit"
                    class="text-center bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Register</button>

                <!-- <a href="index.html"
                    class="text-center bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Register</a> -->
                <p class="text-center mt-[2rem] font-bold text-black/50">Already have account? <a
                        href="<?= urlpath('login') ?>"
                        class="text-center text-purple-500 mb-[3rem] transition ease-in-out duration-100 hover:text-purple-700">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>