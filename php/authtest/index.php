<?php
    require_once "../microsoft_login.php";
    require_once "../user.php";
    require_once "../user_manager.php";

    $code = $_GET["code"];
    $token = get_token(urlencode($code));
    if ($token == null)
        handleError("microsoft authentication code invalid or expired");

    $info = get_userinfo($token);
    if ($info == null)
        handleError("an error occurred while trying to fetch user data");

    //var_dump($info);

    $existing_userid = get_userid_by_email(trim(strtolower($info["mail"])));

    if ($existing_userid == null) {
        // Todo create account
        $userid = create_user(trim(strtolower($info["mail"])), $info["givenName"], $info["surname"]);
        set_logged_in_user($userid);
    } else {
        set_logged_in_user($existing_userid);
    }

    header("Location: ../endpoints/me.php");


    function handleError($msg) {
        // TODO proper error handling
        echo $msg;
        exit();
    }