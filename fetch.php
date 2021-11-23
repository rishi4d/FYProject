<?php
$file_ext = ".mp3";
$carousel_src = [];
$trending_src = [];
$releases_src = [];
$tops_src = [];

function controller($type, $num){
    switch($type) {
        case 'carousel':
            return carousel($num);
            break;
        case 'trending':
            return trending($num);
            break;
        case 'tops':
            return tops($num);
            break;
        case 'releases':
            return releases($num);
            break;
        case 'artists':
            return artists($num);
            break;
        default:
            echo NULL;
    }

}


function carousel($num){
    global $conn, $file_ext, $carousel_src;
    $query = "SELECT t.track_title, t.track_album, f.file_name, f.file_path, f.file_art_path, a.album_art_path from track t, album a, file f where t.track_album = a.album_id and t.track_id = f.file_id order by t.track_popularity desc, t.track_date desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    $carousel_src[] = "{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}";

    return "<a class='music_link' href=\"javascript:void(0)\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div></a>";

}




function trending($num){
    global $conn, $file_ext, $trending_src;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_popularity desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    $trending_src[] = "{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}";

    return "<a class='music_link' href=\"javascript:void(0)\"><div class='card'><img id='secimg' src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div></div></a>";
}

function tops($num){
    global $conn, $file_ext, $tops_src;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_likes desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    $tops_src[] = "{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}";

    return "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div></div></a>";
}

function releases($num){
    global $conn, $file_ext, $releases_src;
    $query = "SELECT track.track_title, file.file_name, file.file_path, file.file_art_path from track left join album on track.track_album = album.album_id left join file on track.track_id = file.file_id order by track.track_date desc";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    $releases_src[] = "{$rows[$num]['file_path']}{$rows[$num]['file_name']}{$file_ext}";

    return "<a class='music_link' href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['file_art_path']."\"><div class=\"card-body\"><p>".$rows[$num]['track_title']."</p></div></div></a>";
}

function artists($num){
    global $conn, $artists_src;
    $query = "SELECT * from artist order by artist.artist_popularity DESC";
    $obj = $conn->query($query);
    $rows = mysqli_fetch_all($obj, MYSQLI_ASSOC);
    return "<a href=\"javascript:void(0)\"><div class=\"card\"><img id=\"secimg\" src=\"".$rows[$num]['artist_img_path']."\"><div class=\"card-body\"><p>".$rows[$num]['artist_name']."</p></div></div></a>";
}