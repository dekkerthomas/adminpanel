<?php include "../include/db.php"; ?>
<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = $db->prepare("SELECT password FROM user WHERE username = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    
    $result = $query->fetch();
    $hashed_password = $result['password'];
    
    if (password_verify($password, $hashed_password)) {
        echo "Login successful";
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        header("Location: /php/main/main.php");
    } else {
        echo "Login failed";
        $_SESSION["login"] = false;
        header("Location: /php/user/user.php?error=1");
    }
    
?>