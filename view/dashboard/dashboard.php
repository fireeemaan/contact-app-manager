<body class="bg-[url('public/assets/img/wavy-lines.svg')] bg-cover pt-8 pb-28">

    <div class="flex flex-row items-center h-screen">
        <!-- Add Contact Modal -->
        <div class="fixed hidden w-full h-auto top-0 bottom-0 bg-black/30 z-20" id="add-contact">
            <div
                class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 size-72 bg-purple-200 rounded-lg shadow-lg">
                <div class="flex flex-col">
                    <a href="" class="close-btn m-1 size-7" onclick="hideElement('add-contact')"><img width="30"
                            height="30" src="https://img.icons8.com/ios/50/delete-sign--v1.png" /></a>
                    <p class="text-2xl font-bold text-center text-purple-500 my-3 ">Add Contact</p>
                    <form action="../../controller/DashboardController.php?action=add" method="post"
                        class="flex flex-col justify-center items-center">
                        <input type="text" placeholder="Phone Number" name="phone" class="py-2 px-3 mt-3 rounded-lg"
                            required>
                        <input type="text" placeholder="Name" name="name" class="py-2 px-3 my-3 rounded-lg" required>
                        <button type="submit"
                            class="py-1 px-20 my-3 rounded-lg bg-purple-500 hover:bg-purple-600 text-white font-bold">Add</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Contact Modal -->
        <div class="flex flex-row items-center h-screen">
            <div class="fixed hidden w-full h-auto top-0 bottom-0 bg-black/30 z-20" id="edit-contact">
                <div
                    class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 size-72 bg-purple-200 rounded-lg shadow-lg">
                    <div class="flex flex-col">
                        <a href="" class="close-btn m-1 size-7" onclick="hideElement('add-contact')"><img width="30"
                                height="30" src="https://img.icons8.com/ios/50/delete-sign--v1.png" /></a>
                        <p class="text-2xl font-bold text-center text-purple-500 my-3 ">Edit Contact</p>
                        <form action="../../controller/DashboardController.php?action=update" method="post"
                            class="flex flex-col justify-center items-center">
                            <input id="id-field" type="hidden" name="id" class="py-2 px-3 mt-3 rounded-lg" required>
                            <input id="name-field" type="text" placeholder="Phone Number" name="phone"
                                class="py-2 px-3 mt-3 rounded-lg" required>
                            <input id="phone-field" type="text" placeholder="Name" name="name"
                                class="py-2 px-3 my-3 rounded-lg" required>
                            <button type="submit"
                                class="py-1 px-20 my-3 rounded-lg bg-purple-500 hover:bg-purple-600 text-white font-bold">Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <div
                    class="fixed flex justify-between top-1/2 left-0 right-0 transform -translate-y-1/2 flex-col w-[13rem] items-center h-[90vh] ml-3 bg-purple-700 backdrop-blur-md bg-opacity-5 border border-black/2 shadow-lg rounded-lg">
                    <div class="sidebar-menu mb-[17rem]">
                        <h1 class="text-3xl font-bold mt-5 text-pink-400 mb-10">
                            Contacti<span class="text-purple-500">fy</span>
                        </h1>
                        <nav>
                            <div class="w-full my-3">
                                <label for="dashboard"
                                    class="has-[:checked]:shadow-lg relative w-[13rem] h-12 p-2 ease-in-out duration-300 border-solid border-black/10 has-[:checked]:border group flex flex-row gap-3 items-center justify-center rounded-xl">
                                    <input type="radio" name="nav" id="dashboard" class="hidden peer/expand" checked />
                                    <p
                                        class="text-lg text-center font-bold hover:text-xl hover:text-purple-600 peer-checked/expand:text-xl peer-checked/expand:text-purple-600 peer ease-in-out duration-200">
                                        Dashboard
                                    </p>
                                </label>
                            </div>
                            <div class="w-full my-3">
                                <label for="profile"
                                    class="has-[:checked]:shadow-lg relative w-[13rem] h-12 p-2 ease-in-out duration-300 border-solid border-black/10 has-[:checked]:border group flex flex-row gap-3 items-center justify-center rounded-xl">
                                    <input type="radio" name="nav" id="profile" class="hidden peer/expand" />
                                    <p
                                        class="text-lg text-center font-bold hover:text-xl hover:text-purple-600 peer-checked/expand:text-xl peer-checked/expand:text-purple-600 peer ease-in-out duration-200">
                                        My Profile
                                    </p>
                                </label>
                            </div>
                            <div class="w-full my-3">
                                <label for="settings"
                                    class="has-[:checked]:shadow-lg relative w-[13rem] h-12 p-2 ease-in-out duration-300 border-solid border-black/10 has-[:checked]:border group flex flex-row gap-3 items-center justify-center rounded-xl">
                                    <input type="radio" name="nav" id="settings" class="hidden peer/expand" />
                                    <p
                                        class="text-lg text-center font-bold hover:text-xl hover:text-purple-600 peer-checked/expand:text-xl peer-checked/expand:text-purple-600 peer ease-in-out duration-200">
                                        Settings
                                    </p>
                                </label>
                            </div>
                        </nav>
                    </div>
                    <div class="logout flex justify-between">
                        <!--                <button class="h-12 p-2 w-[13rem] ease-in-out duration-200 hover:shadow-lg border-black/10 hover:border hover:text-lg rounded-lg font-bold text-md text-red-600">-->
                        <!--                    Logout-->
                        <!--                </button>                -->
                        <a href="index.html"
                            class="text-center h-12 p-2 w-[13rem] ease-in-out duration-200 hover:shadow-lg border-black/10 hover:border hover:text-lg rounded-lg font-bold text-md text-red-600">
                            Logout
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col ml-[30%]">
                <div>
                    <h1 class="text-3xl font-bold mt-5 text-purple-700">
                        Hello, <span class="text-pink-400"><?= $_SESSION['user']['name'] ?></span>👋
                    </h1>
                </div>
                <button
                    class="add-btn flex flex-row justify-center items-center rounded-lg w-[11rem] px-4 py-2 mb-3 bg-green-500 font-bold text-white hover:bg-green-600"
                    id="add-btn" onclick="showElement('add-contact')">
                    <img src="public/assets/img/add-icon.svg" alt="" class="mr-2" />
                    <p>Add Contact</p>
                </button>
                <div class="">
                    <table class="w-[70vw] rounded-lg">
                        <thead class="bg-purple-400 uppercase text-white">
                            <tr class="text-left">
                                <th class="rounded-tl-xl">No. ID</th>
                                <th class="">Phone Number</th>
                                <th class="">Owner</th>
                                <th class="rounded-tr-xl">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-left">
                            <?php
                            if (isset($contacts)) {
                                $i = 1;
                                foreach ($contacts as $contact) {
                                    if ($contact['deleted_at'] == NULL && $contact['user_id'] == $_SESSION['user']['id']) {
                                        ?>
                                        <tr class="border-b border-black/10">
                                            <td class="p-2"><?= $i ?></td>
                                            <td class="p-2"><?= $contact['phone'] ?></td>
                                            <td class="p-2"><?= $contact['name'] ?></td>
                                            <td class="p-2">
                                                <div class="flex flex-row gap-1">
                                                    <a class="edit-btn p-2 bg-blue-500 rounded-lg hover:bg-blue-600"><img
                                                            src="public/assets/img/edit-icon.svg"></img></a>
                                                    <a class="p-2 bg-red-500 rounded-lg mr-2 hover:bg-red-600"><img
                                                            src="public/assets/img/delete-icon.svg"></img></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="public/js/TableModifier.js"></script>
        <script src="public/js/dashboard.js"></script>

</body>