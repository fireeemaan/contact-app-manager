<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

$url = implode(
    "/",
    array_filter(
        explode(
            "/",
            str_replace(
                $_ENV['BASEDIR'],
                "",
                parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
            )
        ),
        'strlen'
    )
);

# GET
route('/', 'get', function () {
    return view('home');
});

route('login', 'get', 'AuthController::login');
route('register', 'get', 'AuthController::register');


# POST
route('login', 'post', 'AuthController::saveLogin');
route('register', 'post', 'AuthController::saveRegister');

if (!in_array($url, $urls['routes'])) {
    header('Location: ' . BASEURL);
    exit;
}

$call = $urls[$_SERVER['REQUEST_METHOD']][$url];
$call();