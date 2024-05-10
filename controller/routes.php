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
Router::url('/', 'get', function () {
    return view('auth_page/layout', ['url' => 'login']);
});

Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');

Router::url('dashboard', 'get', 'DashboardController::index');
Router::url('dashboard/logout', 'get', 'AuthController::logout');

Router::url('contacts/remove', 'get', 'ContactController::delete');
Router::url('contacts/edit', 'get', 'ContactController::edit');
Router::url('contacts', 'get', 'DashboardController::contacts');


# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');

Router::url('contacts/add', 'post', 'ContactController::saveAdd');
Router::url('contacts/edit', 'post', 'ContactController::saveEdit');

new Router();