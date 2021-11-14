<?php
    include 'database.php';
    include 'table_contact.php';

    $database = new Database();
    if (isset($_POST['btn-submit']))
    {    
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        TableContact::insert(new TableContact(0, $name, $surname, $subject, $email, $message), $database);
    }

    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>