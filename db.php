<?php
    $conn = new mysqli("localhost","root", "6274", "rhythm");
    if($conn->connect_errno){
        echo $conn->connect_error;
        exit();
    }
