<?php
require_once "../user.php";
require_once "../photo.php";
require_once "../comment.php";

$userid = get_signed_in_user_id();
if ($userid === -1)
    handleError("not signed in");

if (!isset($_GET["photoid"])) {
    handleError("photoid not set");
} else if (!isset($_GET["comment"])) {
    handleError("comment content not set");
} else {
    $commentArray = filterComment($_GET["photoid"], $_GET["comment"]);
    if($commentArray['success']) {
        $user =  get_signed_in_user();
        $comment = $commentArray['comment'];
        echo json_encode([
            "success" => "true",
            "name" => $user['vorname'] ." " .$user['nachname'],
            "comment" => $comment
        ]);
    }
    else {
        handleError('comment contains words from blacklist');
    }
}

function handleError($msg) {
    echo json_encode([
        "success" => "false",
        "message" => $msg
    ]);
    exit();
}