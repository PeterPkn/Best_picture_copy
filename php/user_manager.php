<?php
    require_once "user.php";

    /*
     * Erstellt Benutzer
     */
    function create_user($email, $vorname, $nachname, $password_hash = null, $is_admin = false) {
        $userid = random_int(0, 1000000000);
        while (get_user_by_id($userid) != false)
            $userid = random_int(0, 1000000000);

        $s = get_bp_mysql_object()->
        prepare("insert into user (user_id, email, password_hash, vorname, nachname, is_admin) values (:user_id, :email, :password_hash, :vorname, :nachname, :is_admin)");
        $s->execute(array(
            ":user_id" => $userid,
            ":email" => $email,
            ":password_hash" => $password_hash,
            ":vorname" => $vorname,
            ":nachname" => $nachname,
            ":is_admin" => $is_admin ? 1 : 0,
        ));

        return $userid;
    }

    /*
     * Weist einem Benutzer ein Passwort zu
     */
    function assign_password($userid, $password_hash) {
        $s = get_bp_mysql_object()->
        prepare("update user set password_hash = :password_hash where user_id = :user_id");
        $s->execute(array(
            ":user_id" => $userid,
            ":password_hash" => $password_hash
        ));
    }

    /*
     * Return true wenn das Passwort mit dem in der Datenbank abgespeicherten übereinstimmt, sonst false
     */
    function check_password($userid, $password) {
        $password_hash = get_user_by_id($userid)["password_hash"];
        return password_verify($password, $password_hash);
    }

    function delete_user($userid) {
        $s = get_bp_mysql_object()->
        prepare("delete from user where user_id = :userid");
        $s->execute(array(
            ":user_id" => $userid
        ));
    }