<?php
    session_start();
    include 'db.php';

    function carousel($num){
        global $conn;
        $query = "SELECT t.track_title, t.track_album, f.file_path, f.file_art_path, a.album_art_path from track t, album a, file f where t.track_album = a.album_id and t.track_id = f.file_id";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['file_path']."\" type='audio/mpeg'>";
    }





    function trending($num){
        global $conn;
        $query = "SELECT track.track_title, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_popularity desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['file_path']."\" type='audio/mpeg'>";
    }

    function tops($num){
        global $conn;
        $query = "SELECT track.track_title, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_likes desc";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['file_path']."\" type='audio/mpeg'>";
    }

    function releases($num){
        global $conn;
        $query = "SELECT track.track_title, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_date";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['track_title']."</p></div><audio id='audiooo'><source src=\"".$rows[$num-1]['file_path']."\" type='audio/mpeg'>";
    }

    function artists($num){
        global $conn;
        $query = "SELECT * from artist order by artist.artist_popularity DESC";
        $obj = $conn->query($query);
        $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
        echo "<img id=\"secimg\" src=\"".$rows[$num-1]['artist_img_path']."\"><div class=\"card-body\"><p>".$rows[$num-1]['artist_name']."</p></div>";
    }
