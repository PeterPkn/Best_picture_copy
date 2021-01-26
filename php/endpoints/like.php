<?php
    require_once "../photo.php";
    require_once "../user.php";

    $userid = get_signed_in_user_id();

    if($userid!==-1) {
        if ($_GET["action"] == "like") {
            $photoid = $_GET["picture"];
            if(!if_user_liked_photo($photoid, $userid)) {
                increase_like($photoid, $userid);
                echo 'true';
                exit();
            }
        }

        if($_GET["action"] == "minus") {
            $photoid = $_GET["picture"];
            if(if_user_liked_photo($photoid, $userid)) {
                decrease_like($photoid, $userid);
                echo 'true';
                exit();
            }
        }
    }