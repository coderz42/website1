<?php
include('includes/header.php');
?>

<?php
if (isset($_SESSION["message"])) {
    $type = $_SESSION["message_type"] === 'success' ? 'green' : 'red';
    echo "<div style='color: $type;'>{$_SESSION['message']}</div>";
    unset($_SESSION["message"]);
    unset($_SESSION["message_type"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login-code.php">
            <input type="text" name="email" placeholder="email" required><br>
            <input type="password" name="password" placeholder="password" required><br>
            <button type="submit" name="loginBtn" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>


<?php include('includes/footer.php'); ?>