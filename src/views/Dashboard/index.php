<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Contact Manager App</title>
  <!-- <link rel="stylesheet" href="output.css" /> -->
  <!-- <link rel="stylesheet" href="./css/index.css" type="text/css" /> -->

  <style>
    <?php include '../../css/index.css' ?>
  </style>

</head>

<body class="bg-[url('../../assets/img/wavy-lines.svg')] bg-cover py-28">


  <div class="flex flex-row items-center h-screen">
    <div class="fixed hidden w-full h-auto top-0 bottom-0 bg-black/30 z-20" id="add-contact">
      <div
        class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 size-72 bg-purple-200 rounded-lg shadow-lg">
        <div class="flex flex-col">
          <a href="" class="close-btn m-1 size-7" onclick="hideElement('add-contact')"><img width="30" height="30"
              src="https://img.icons8.com/ios/50/delete-sign--v1.png" /></a>
          <p class="text-2xl font-bold text-center text-purple-500 my-3 ">Add Contact</p>
          <form action="../../controller/DashboardController.php?action=add" method="post"
            class="flex flex-col justify-center items-center">
            <input type="text" placeholder="Phone Number" name="phone" class="py-2 px-3 mt-3 rounded-lg" required>
            <input type="text" placeholder="Name" name="name" class="py-2 px-3 my-3 rounded-lg" required>
            <button type="submit"
              class="py-1 px-20 my-3 rounded-lg bg-purple-500 hover:bg-purple-600 text-white font-bold">Add</button>
          </form>
        </div>
      </div>
    </div>

    <div>
      <div
        class="fixed flex top-1/2 left-0 right-0 transform -translate-y-1/2 flex-col w-[13rem] items-center h-[90vh] ml-3 bg-purple-700 backdrop-blur-md bg-opacity-5 border border-black/2 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mt-5 text-pink-400 mb-10">
          Contacti<span class="text-purple-500">fy</span>
        </h1>
        <div class="sidebar-menu mb-[17rem]">
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

    <div class="flex flex-col ml-[20%]">
      <div>
        <h1 class="text-3xl font-bold mt-5 text-purple-700">
          Hello, <span class="text-pink-400">Firman</span>👋
        </h1>
      </div>
      <button
        class="add-btn flex flex-row justify-center items-center rounded-lg w-[11rem] px-4 py-2 mb-3 bg-green-500 font-bold text-white hover:bg-green-600"
        id="add-btn" onclick="showElement('add-contact')">
        <img src="../../assets/img/add-icon.svg" alt="" class="mr-2" />
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
            require_once "../../controller/DashboardController.php";
            $dashboardController = new DashboardController();
            $result = $dashboardController->getAllContact();
            ?>

            <?php foreach ($result as $index => $contact): ?>

              <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $contact['phone'] ?></td>
                <td><?= $contact['name'] ?></td>
                <td>
                  <button class="p-2 bg-blue-500 rounded-lg hover:bg-blue-600"><img src="../../assets/img/edit-icon.svg"
                      alt=""></button>
                  <button class="p-2 bg-red-500 rounded-lg mr-2 hover:bg-red-600"><img
                      src="../../assets/img/delete-icon.svg" alt=""></button>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="../../js/TableModifier.js"></script>
  <script src="../../js/index.js"></script>

  <script>console.log(document.querySelector('form').action);</script>

</body>

</html>