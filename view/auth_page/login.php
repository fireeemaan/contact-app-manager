<body class="bg-[url('public/assets/img/blob-scene-haikei.svg')] bg-cover">
    <div>
        <div class="flex flex-row items-center justify-center">
            <div class="flex flex-col items-center justify-center h-screen">
                <div
                    class="flex flex-col w-full max-w-md bg-white bg-cover rounded-lg mr-3 bg-opacity-5 backdrop-blur-xl drop-shadow-md shadow-2xl">
                    <h1 class="text-3xl text-center font-bold mt-5 text-pink-400">
                        Contacti<span class="text-purple-500">fy</span>
                    </h1>
                    <h2 class="text-wrap text-center text-1xl">
                        Stop searching, start connecting. Organize your contacts.
                    </h2>
                    <img src="public/assets/img/bg.jpg" alt="" class="m-5 rounded-lg" />
                </div>
            </div>
            <div class="flex flex-col items-center justify-center h-screen">
                <div
                    class="w-[20rem] max-w-md p-6 bg-white backdrop-blur-xl bg-opacity-5 shadow-2xl drop-shadow-md rounded-lg">
                    <h2 class="text-center justify-center font-bold text-2xl mb-4 text-purple-600">
                        Login
                    </h2>
                    <form action="<?= urlpath('login') ?>" method="post" class="flex flex-col">
                        <input type="text" name="username"
                            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                            placeholder="Username" required />
                        <input type="password" name="password"
                            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                            placeholder="Password" required />
                        <!--                    <button type="submit" class="bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Login</button>-->
                        <button type="submit"
                            class="text-center bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Login</button>
                        <!-- <a href="dashboard.html"
                            class="text-center bg-gradient-to-r from-purple-400 to-pink-300 text-white font-bold py-2 px-4 rounded-md mt-4 hover:from-purple-500 hover:to-pink-400">Login</a> -->
                        <p class="text-center mt-[2rem] font-bold">Don't have account?</p>
                        <a href="<?= urlpath('register') ?>"
                            class="text-center mb-[3rem] transition ease-in-out duration-100 hover:text-purple-500">Register
                            Now!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>