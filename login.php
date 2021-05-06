<?php
    session_start();
    include 'server.php';
    include 'db.php';

    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

    if(isset($_POST['user_login'])){
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='".$username."'";
        $obj = $conn->query($query);
        $result = $obj->fetch_assoc();

        $db_password = $result['password'];

        if($obj->num_rows == 1 && $db_password==$password){
            $_SESSION['name'] = $result["name"];
            $_SESSION['log'] = true;
            header('Location: index.php');
        }
        elseif($obj->num_rows == 1 && $db_password!=$password) {
            header('Location: index.php');
            $_SESSION['log'] = false;
        }
    }