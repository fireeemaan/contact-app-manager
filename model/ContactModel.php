<?php

include_once 'config/conn.php';

class Contact
{
    static function select($id = '')
    {
        global $conn;
        $sql = "SELECT * FROM contacts";
        if ($id) {
            $sql = "SELECT * FROM contacts WHERE id = ?";
        }
        $result = $conn->query($sql);
        $rows = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }

    static function selectEdit($id = '')
    {
        global $conn;
        $sql = "SELECT * FROM contacts";
        if ($id) {
            $sql = "SELECT * FROM contacts WHERE id = ?";
        }
        $result = $conn->query($sql);
        $rows = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }

    static function insert($data = [])
    {
        $phone = $data['phone'];
        $name = $data['name'];
        $user_id = $data['user_id'];
        $created_at = date('Y-m-d H:i:s', strtotime('now'));

        global $conn;
        $sql = "INSERT INTO contacts SET phone = ?, name = ?, user_id = ?, created_at = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssis', $phone, $name, $user_id, $created_at);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;

    }

}