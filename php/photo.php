<?php
    require_once "mysql_manager.php";

    function get_unapproved_photo() {
        $s = get_bp_mysql_object()->prepare("select * from photo where approved_by_admins is not true");
        $s->execute();
        return $s->fetch();
    }

    function delete_photo($photoid) {
        $s = get_bp_mysql_object()->prepare("delete from photo where photo_id = :photoid");
        $s->execute(array(":photoid" => $photoid));
        return $s->fetch();
    }

    function create_image_entry($userid, $title=null, $desc=null, $approved_by_admins=false) {
        $photoid = random_int(0, 1000000000);
        while (get_photo_by_id($photoid) != false)
            $photoid = random_int(0, 1000000000);

        $path = "assets/images/uploads/" . $photoid . ".jpg";

        $s = get_bp_mysql_object()->
        prepare("insert into photo (photo_id, user_id, path, approved_by_admins, title, description) values (:photo_id, :user_id, :filepath, :approved_by_admins, :title, :desc)");
        $s->execute(array(
            ":user_id" => $userid,
            ":photo_id" => $photoid,
            ":filepath" => $path,
            ":approved_by_admins" => $approved_by_admins ? 1 : 0,
            ":title" => $title,
            ":desc" => $desc
        ));

        return $photoid;
    }

    function get_photo_by_id($photoid) {
        $s = get_bp_mysql_object()->prepare("select * from photo where photo_id = :photoid");
        $s->execute(array(":photoid" => $photoid));
        return $s->fetch();
    }

    function set_photo_approved($photoid, $approved=true) {
        $s = get_bp_mysql_object()->prepare("update photo set approved_by_admins=:approved where photo_id = :photoid");
        $s->execute(array(
            ":approved" => $approved,
            ":photoid" => $photoid
        ));
        return $s->fetch();
    }

    function get_all_photos_by_user($userid=null) {
        if ($userid == null) $userid = get_signed_in_user_id();

        $s = get_bp_mysql_object()->prepare("select * from photo p where user_id = :userid and approved_by_admins order by date desc");
        $s->execute(array(":userid" => $userid));
        return $s->fetchAll();
    }

    function get_count_likes_by_photo($photoid) {
        $s = get_bp_mysql_object()->prepare("select count(entryrating_id) as count from photo p join entry_rating er on p.photo_id = er.photo_id where p.photo_id = :photoid");
        $s->execute(array(":photoid" => $photoid));
        $obj = $s->fetchAll();
        return $obj[0]['count'];
    }

    function increase_like($photoid, $userid) {
        $s = get_bp_mysql_object()->
        prepare("insert into entry_rating(photo_id, user_rated) values (:photo_id, :user_id)");
        $s->execute(array(
            ":user_id" => $userid,
            ":photo_id" => $photoid
        ));
    }

    function decrease_like($photoid, $userid) {
        $s = get_bp_mysql_object()->
        prepare("delete from entry_rating where photo_id = :photo_id and user_rated = :user_id");
        $s->execute(array(
            ":user_id" => $userid,
            ":photo_id" => $photoid
        ));
    }

    function get_date_by_photoid($photoid) {
        $date = get_photo_by_id($photoid)['date'];
        $array2 = explode(' ', $date);
        $array = explode('-', $array2[0]);
        return "$array[2].$array[1].$array[0]";
    }

    /*
    * True wenn User Foto schon geliked hat
    */
    function if_user_liked_photo($photoid, $userid) {
        if ($userid!==-1) {
            $s = get_bp_mysql_object()->prepare("select if(entryrating_id is null, 0, 1) as bool from entry_rating where photo_id = :photoid and user_rated = :userid");
            $s->execute(array(
                ":photoid" => $photoid,
                ":userid" => $userid
            ));
            $obj = $s->fetch();
            return gettype($obj) == 'array';
        }
        return false;
    }
