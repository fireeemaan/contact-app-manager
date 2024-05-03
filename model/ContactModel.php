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
}