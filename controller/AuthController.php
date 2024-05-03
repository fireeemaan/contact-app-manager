<?php

include_once 'model/UserModel.php';


class AuthController
{

    static function login()
    {
        view('auth_page/layout', ['url' => 'login']);
    }

    static function register()
    {
        view('auth_page/layout', ['url' => 'register']);
    }

    static function saveLogin()
    {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'username' => $post['username'],
            'password' => $post['password']
        ]);

        // echo '<script>console.log(' . json_encode($user) . ')</script>';

        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;

            // echo '<script>console.log(' . json_encode($_SESSION['user']) . ')</script>';

            header('Location: ' . BASEURL . 'dashboard');
        } else {
            header('Location: ' . BASEURL . 'login?failed=true');
        }
    }

    static function saveRegister()
    {
        $post = array_map('htmlspecialchars', $_POST);

        if ($post['password'] !== $post['confirm_password']) {
            header('Location: ' . BASEURL . 'register?failed=true');
            exit;
        }

        $user = User::register([
            'name' => $post['name'],
            'username' => $post['username'],
            'password' => $post['password']
        ]);


        if ($user) {
            header('Location: ' . BASEURL . 'login');
        } else {
            header('Location: ' . BASEURL . 'register?failed=true');
        }
    }

    static function logout()
    {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();
        header('Location: ' . BASEURL);
    }

    static function forgotPassword()
    {
    }
}