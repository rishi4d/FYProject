<?php
$file_ext = ".mp3";

function controller($type){
    switch($type) {
        case 'carousel':
            carousel();
            break;
        case 'trending':
            trending();
            break;
        case 'tops':
            tops();
            break;
        case 'releases':
            releases();
            break;
        case 'artists':
            artists();
            break;
        default:
            echo NULL;
    }

}


function carousel(){
    global $conn, $file_ext;
    $num = 0;
    $query = "SELECT t.track_title, t.track_album, f.file_name, f.file_path, f.file_art_path, a.album_art_path from track t, album a, file f where t.track_album = a.album_id and t.track_id = f.file_id order by t.track_popularity desc, t.track_date desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    echo "<a class='music_link' href=\"javascript:void(0)\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div><audio><source src=\"{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}\" type='audio/mpeg'></a>";
    $num++;
}





function trending(){
    global $conn, $file_ext;
    $num = 0;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_popularity desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    echo "<a class='music_link' href=\"javascript:void(0)\"><div class='card'><img id='secimg' src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div><audio><source src=\"{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}\" type='audio/mpeg'></div></a>";
    $num++;
}

function tops(){
    global $conn, $file_ext;
    $num = 0;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_likes desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    echo "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div><audio><source src=\"{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}\" type='audio/mpeg'></div></a>";
    $num++;
}

function releases(){
    global $conn, $file_ext;
    $num = 0;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_date desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    echo "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div><audio><source src=\"{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}\" type='audio/mpeg'></div></a>";
    $num++;
}

function artists(){
    global $conn;
    $num = 0;
    $query = "SELECT * from artist order by artist.artist_popularity DESC";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    echo "<a href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['artist_img_path']."\"><div class=\"card-body\"><p>".$rows[$num]['artist_name']."</p></div></div></a>";
    $num++;
}