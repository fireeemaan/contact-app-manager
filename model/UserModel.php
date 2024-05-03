<?php

include_once 'config/conn.php';

class User
{
    static function login($data = [])
    {
        $username = $data['username'];
        $password = $data['password'];
        global $conn;

        $result = $conn->query("SELECT c.*, u.name FROM credentials c JOIN users u ON c.user_id = u.id WHERE c.username = '$username'");
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
        $name = $data['name'];
        $username = $data['username'];
        $password = $data['password'];
        global $conn;

        # Insert to users table
        $sql_users = "INSERT INTO users SET name = ?";
        $stmt_users = $conn->prepare($sql_users);
        $stmt_users->bind_param('s', $name);
        $stmt_users->execute();

        $result_users = $stmt_users->affected_rows > 0 ? true : false;

        $user_id = $conn->insert_id;

        # Insert to credentials table
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql_cred = "INSERT INTO credentials SET username = ?, password = ?, user_id = ?";
        $stmt_cred = $conn->prepare($sql_cred);
        $stmt_cred->bind_param('ssi', $username, $hashedPassword, $user_id);
        $stmt_cred->execute();

        $result_cred = $stmt_cred->affected_rows > 0 ? true : false;



        echo '<script>console.log("' . $result_cred && $result_users . '")</script>';
        return $result_cred && $result_users;
    }

    // static function getPassword($email)
    // {
    //     global $conn;
    //     $sql = "SELECT password FROM users WHERE email = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('s', $email);
    //     $stmt->execute();

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;
    // }

    static function update($data = [])
    {
    }

    static function delete($id = '')
    {
    }
}