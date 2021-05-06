<?php
    session_start();
    include 'server.php';
    include 'db.php';

    if(isset($_POST['user_signup'])){
        $name = $conn->real_escape_string($_POST['name']);
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $password2 = $conn->real_escape_string($_POST['password2']);

        if($password != $password2){
            $_SESSION['match'] = false;
            header('Location: index.php');
        }
        $password = md5($password);
        $query = "INSERT INTO users(name, username, password) VALUES('$name', '$username', '$password')";
        $conn->query($query);
        $_SESSION['name'] = $name;
        $_SESSION['log'] = true;

        header('Location: index.php');

}