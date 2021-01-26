<?php
    require_once "mysql_manager.php";

    /*
     * Liefert ein User-Objekt mit der gegebenen User ID
     */
    function get_user_by_id($userid) {
        $s = get_bp_mysql_object()->prepare("select * from user where user_id = :userid");
        $s->execute(array(":userid" => $userid));
        return $s->fetch();
    }

    /*
     * Liefert die User ID einer gegebenen Email
     */
    function get_userid_by_email($email) {
        $s = get_bp_mysql_object()->prepare("select * from user where email = :email");
        $s->execute(array(":email" => $email));
        $obj = $s->fetch();
        return $obj["user_id"];
    }

    /*
    * Liefert den Usernamen eines gegebenen Fotos
    */
    function get_username_by_photo($photoid) {
        $s = get_bp_mysql_object()->prepare("select concat(vorname, ' ', nachname) as name from user u join photo p on u.user_id = p.user_id where photo_id = :photoid");
        $s->execute(array(
            ":photoid" => $photoid
        ));
        $obj = $s->fetch();
        return $obj['name'];
    }

    /*
     * Liefert Summe aller bekommenen Likes von einem User
     */
    function get_count_likes_of_user($userid) {
        $s = get_bp_mysql_object()->prepare("select count(entryrating_id) as likes from user u join photo p on u.user_id = p.user_id join entry_rating er on p.photo_id = er.photo_id where p.user_id = :userid;");
        $s->execute(array(
            ":userid" => $userid
        ));
        $obj = $s->fetch();
        return $obj['likes'];
    }

    /*
     * Liefert Summe aller hochgeladenen Fotos von einem User
     */
    function get_count_photos_of_user($userid) {
        $s = get_bp_mysql_object()->prepare("select count(photo_id) as posts from user u join photo p on u.user_id = p.user_id where p.user_id = :userid and approved_by_admins;");
        $s->execute(array(
            ":userid" => $userid
        ));
        $obj = $s->fetch();
        return $obj['posts'];
    }

    /*
     * Liefert den momentan angemeldeten Benutzer
     */
    function get_signed_in_user() {
        $userid = get_signed_in_user_id();
        if ($userid == -1)
            return null;
        else
            return get_bp_mysql_object()->query("select * from user where user_id = {$userid}")->fetch();
    }

    /*
     * Liefert die ID des momentan angemeldeten Benutzers
     */
    function get_signed_in_user_id() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if (isset($_SESSION["userid"]))
            return $_SESSION["userid"];
        else return -1;
    }

    /*
     * Setzt den angemeldeten Benutzer
     */
    function set_logged_in_user($userid) {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        session_reset();
        $_SESSION["userid"] = $userid;
    }

    /*
     * Löscht die momentane Sitzung
     */
    function set_logged_out() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        session_destroy();
    }