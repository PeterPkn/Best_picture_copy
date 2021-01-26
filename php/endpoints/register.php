<?php

    if (!isset($_POST["email"]))
        handleError("E-Mail fehlt");

    if (! (isset($_POST["firstname"]) && isset($_POST["surname"])))
        handleError("Name fehlt");

    if (!isset($_POST["password"]))
        handleError("Passwort fehlt");

    $email = trim(strtolower($_POST["email"]));

    if (!preg_match("(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)", $email))
        handleError("Ungültige E-Mail Adresse");
    if (!dns_check_record(explode("@", $email)[1], "mx"))
        handleError("Ungültige E-Mail Adresse");

    if (strlen($_POST["password"]) < 8)
        handleError("Passwort zu kurz (min. 8 Zeichen)");
    else if (strlen($_POST["password"]) > 256)
        handleError("Passwort zu lang (max. 256 Zeichen)");

    require_once "../user_manager.php";
    if (gettype(get_userid_by_email($email))!='NULL')
        handleError("E-Mail wird schon verwendet");

    $userid = create_user($email, $_POST["firstname"], $_POST["surname"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    set_logged_in_user($userid);

    echo "success";

    function handleError($msg) {
        echo "#" .$msg;
        exit();
    }