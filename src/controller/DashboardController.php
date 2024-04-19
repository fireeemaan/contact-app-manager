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

    static function updateContact($id, $name, $phone)
    {
        $conn = new DbConfig();
        $sql = "UPDATE user SET name = '$name', phone = '$phone' WHERE id = $id";
        $result = $conn->getConnection()->query($sql);
        if ($result) {
            header("Location: ../views/Dashboard");
            exit;
        } else {
            echo "Failed to update contact";
        }
    }

    static function deleteContact($id)
    {
        $conn = new DbConfig();
        $sql = "DELETE FROM user WHERE id = $id";
        $result = $conn->getConnection()->query($sql);

        if ($result) {
            header("Location: ../views/Dashboard");
            exit;
        } else {
            echo "Failed to delete contact";
        }
    }

}

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'add') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    echo $name;
    DashboardController::addContact($name, $phone);
} else if ($action == 'delete') {
    $id = $_POST['id_contact'];
    DashboardController::deleteContact($id);
} else if ($action == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    DashboardController::updateContact($id, $name, $phone);
}
