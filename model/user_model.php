<?php

include_once 'config/conn.php';

class User
{
    static function login($data = [])
    {
        $username = $data['username'];
        $password = $data['password'];
        global $conn;

        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    static function register($data = [])
    {
        $username = $data['username'];
        $password = $data['password'];
        global $conn;

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user SET username = ?, password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $hashedPassword);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        echo '<script>console.log("' . $result . '")</script>';
        return $result;
    }

    static function getPassword($email)
    {
        global $conn;
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data = [])
    {
    }

    static function delete($id = '')
    {
    }
}