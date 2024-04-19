<?php

require_once __DIR__ . '/../../config/config.php';

class DashboardController
{

    static function getAllContact()
    {
        $conn = new DbConfig();
        $sql = "SELECT * FROM user";
        $result = $conn->getConnection()->query($sql);

        return $result;
    }

    static function addContact($name, $phone)
    {
        $conn = new DbConfig();
        $sql = "INSERT INTO user (name, phone) VALUES ('$name', '$phone')";
        $result = $conn->getConnection()->query($sql);

        if ($result) {
            header("Location: ../views/Dashboard");
            exit;
        } else {
            echo "Failed to add contact";
        }
    }

}

// DashboardController::addContact('Firsman', '08123456789');

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'add') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    echo $name;
    DashboardController::addContact($name, $phone);
}
