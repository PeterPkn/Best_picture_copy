<?php
    require_once "../user_manager.php";

    if (!isset($_POST["email"]))
        handleError("E-Mail fehlt");

    if (!isset($_POST["password"]))
        handleError("Passwort fehlt");

    $email = trim(strtolower($_POST["email"]));
    $userid = get_userid_by_email($email);

    if (gettype(get_userid_by_email($email))=='NULL')
        handleError("E-Mail ist nicht registriert");

    $password_correct = check_password($userid, $_POST["password"]);

    if ($password_correct) {
        set_logged_in_user($userid);
        echo 'success';
    } else {
        handleError("Ungültiges Passwort");
    }

    function handleError($msg) {
        echo "#" .$msg;
        exit();
    }