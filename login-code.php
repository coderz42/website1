<?php
session_start();

require 'admin/functions.php';

if (isset($_POST["loginBtn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admins WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            $_SESSION["message"] = "Login successful!";
            $_SESSION["message_type"] = "success";

            header("Location: admin/index.php");
            exit;
        } else {
            $_SESSION["message"] = "Incorrect password.";
            $_SESSION["message_type"] = "error";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION["message"] = "Email not found.";
        $_SESSION["message_type"] = "error";
        header("Location: login.php");
        exit;
    }
}
?>


?>