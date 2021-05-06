<?php
    session_start();
    include 'db.php';

    function carousel($num){
        $conn = new mysqli("localhost","root", "6274", "rhythm");
        $query = "SELECT tracks.title, tracks.path, album.art_path from tracks left outer join album on tracks.album_id = album.album_id";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['path']."\" type='audio/mpeg'>";
    }

    function trending($num){
        $conn = new mysqli("localhost","root", "6274", "rhythm");
        $query = "SELECT tracks.title, tracks.path, album.art_path from tracks left outer join album on tracks.album_id = album.album_id order by tracks.plays desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['path']."\" type='audio/mpeg'>";
    }

    function tops($num){
        $conn = new mysqli("localhost","root", "6274", "rhythm");
        $query = "SELECT tracks.title, tracks.path, album.art_path from tracks left outer join album on tracks.album_id = album.album_id order by likes desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['path']."\" type='audio/mpeg'>";
    }

    function releases($num){
        $conn = new mysqli("localhost","root", "6274", "rhythm");
        $query = "SELECT tracks.title, tracks.path, album.art_path from tracks left outer join album on tracks.album_id = album.album_id";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['path']."\" type='audio/mpeg'>";
    }

    function artists($num){
        $conn = new mysqli("localhost","root", "6274", "rhythm");
        $query = "SELECT * from artist order by likes DESC";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['image']."\"><div class=\"card-body\"><p>".$rows[$num-1]['name']."</p></div>";
    }
