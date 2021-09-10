<?php
    session_start();
    include 'db.php';

    $ext = ".mp3";


    function play(){

    }




    function carousel($num){
        global $conn,$ext;
        $query = "SELECT t.track_title, t.track_album, f.file_name, f.file_path, f.file_art_path, a.album_art_path from track t, album a, file f where t.track_album = a.album_id and t.track_id = f.file_id";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<a class='music_link' href=\"javascript:void(0)\"><img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio><source src=\"{$rows[$num-1]['file_path']}{$rows[$num-1]['file_name']}{$ext}\" type='audio/mpeg'></a>";
    }





    function trending($num){
        global $conn, $ext;
        $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_popularity desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<a class='music_link' href=\"javascript:void(0)\"><div class='card'><img id='secimg' src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio><source src=\"{$rows[$num-1]['file_path']}{$rows[$num-1]['file_name']}{$ext}\" type='audio/mpeg'></div></a>";
    }

    function tops($num){
        global $conn, $ext;
        $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_likes desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio><source src=\"{$rows[$num-1]['file_path']}{$rows[$num-1]['file_name']}{$ext}\" type='audio/mpeg'></div></a>";
    }

    function releases($num){
        global $conn, $ext;
        $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_date desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio><source src=\"{$rows[$num-1]['file_path']}{$rows[$num-1]['file_name']}{$ext}\" type='audio/mpeg'></div></a>";
    }

    function artists($num){
        global $conn;
        $query = "SELECT * from artist order by artist.artist_popularity DESC";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<a href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num-1]['artist_img_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['artist_name']."</p></div></div></a>";
    }
