<?php
    if(isset($_GET['ncs']))
        $conn = new mysqli("localhost","root", "6274", "fyp_ncs");
    else
        $conn = new mysqli("localhost","root", "6274", "rhythm");

    if($conn->connect_errno){
        echo $conn->connect_error;
        exit();
    }
