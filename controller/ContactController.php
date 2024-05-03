<?php

include_once 'model/ContactModel.php';

class ContactController
{
    static function saveAdd()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::insert([
                'phone' => $post['phone'],
                'name' => $post['name'],
                'user_id' => $_SESSION['user']['id']
            ]);

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                header('Location: ' . BASEURL . 'contacts/add?addFailed=true');
            }
        }
    }
    // static function edit()
    // {
    //     if (!isset($_SESSION['user'])) {
    //         header('Location: ' . BASEURL . 'login?auth=false');
    //         exit;
    //     } else {
    //         view('dashboard/layout', ['url' => 'contacts']);
    //     }
    // }
}