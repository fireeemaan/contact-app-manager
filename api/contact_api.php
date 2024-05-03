<?php

include_once '../model/ContactModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
        $contacts = Contact::selectEdit($id);
    }
    header('Content-Type: application/json');
    echo '<script>console.log(' . json_encode($contacts) . ')</script>';
    exit;
}