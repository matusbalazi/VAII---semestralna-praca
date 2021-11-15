<?php
    include 'database.php';
    include 'table_register.php';

    $database = new Database();
    if (isset($_POST['btn-register']))
    {    
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $nickname = $_POST['nickname'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $is_admin = false;
        if ($password == $confirm_password) {
            TableRegister::insert(new TableRegister(0, $name, $surname, $email, $nickname, $password, $is_admin), $database);
        } else {
            echo 'Incorrect password';
        }
    }

    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>