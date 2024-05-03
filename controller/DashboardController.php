<?php

include_once 'model/UserModel.php';
include_once 'model/ContactModel.php';


class DashboardController
{
    static function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            view('dashboard/layout', ['url' => 'dashboard', 'contacts' => Contact::select(), 'user' => $_SESSION['user']]);
        }
    }

    // Get All Contact
    // static function contacts()
    // {
    //     if (!isset($_SESSION['user'])) {
    //         header('Location: ' . BASEURL . 'login?auth=false');
    //         exit;
    //     } else {

    //         view('dashboard/layout', ['url' => 'contacts']);
    //     }
    // }

}