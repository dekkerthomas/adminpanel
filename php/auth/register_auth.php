<?php include "../include/db.php"; ?>
<?php
    $password = $_POST['password'];
    $username = $_POST['username'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = $db->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $hashed_password);
    $query->execute();
    header("Location: /php/auth/login.php");
    die();
?>