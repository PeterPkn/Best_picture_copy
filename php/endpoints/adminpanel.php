<?php
    require_once "../contest.php";
    require_once "../user.php";
    require_once "../user_manager.php";
    require_once "../photo.php";

    $user = get_signed_in_user();
    $response = array();



    if ($user == null) {
        $response = array(
            "success" => false,
            "message" => "not logged in"
        );
    } else if (!$user["is_admin"]) {
        $response = array(
            "success" => false,
            "message" => "missing permissions"
        );
    } else if (!isset($_GET["action"])) {
        $response = array(
            "success" => false,
            "message" => "action parameter missing"
        );
    } else {

        if ($_GET["action"] == "start_contest") {
            if (get_current_contest_id() == -1) {
                start_contest();
                $response = array(
                    "success" => true,
                    "message" => "contest started"
                );
            } else {
                $response = array(
                    "success" => false,
                    "message" => "contest already running"
                );
            }
        } else if ($_GET["action"] == "stop_contest") {
            if (get_current_contest_id() != -1) {
                stop_contest();
                $response = array(
                    "success" => true,
                    "message" => "contest stopped"
                );
            } else {
                $response = array(
                    "success" => false,
                    "message" => "no contest running"
                );
            }
        } else if ($_GET["action"] == "get_unapproved_photo") {
            $unapproved_photo = get_unapproved_photo();
            if ($unapproved_photo == false)
                $response = array(
                    "success" => false,
                    "message" => "no unapproved photo found"
                );
            else {
                $upload_user = get_user_by_id($unapproved_photo["user_id"]);
                $response = array(
                    "success" => true,
                    "photo_id" => $unapproved_photo["photo_id"],
                    "path" => $unapproved_photo["path"]
                );
                if ($upload_user == false) $response["username"] = null;
                else $response["username"] = $upload_user["vorname"] . " " . $upload_user["nachname"];
            }
        } else if ($_GET["action"] == "approve_photo") {
            if (!isset($_GET["photoid"]))
                $response = array(
                    "success" => false,
                    "message" => "missing photoid parameter"
                );
            else if (get_photo_by_id($_GET["photoid"]) == false)
                $response = array(
                    "success" => false,
                    "message" => "there exists no photo with id '$_GET[photoid]'"
                );
            else {
                set_photo_approved($_GET["photoid"]);
                $response = array(
                    "success" => true,
                    "message" => "photo with id '$_GET[photoid]' was approved"
                );
            }
        } else if ($_GET["action"] == "delete_user") {
            if (!isset($_GET["userid"]))
                $response = array(
                    "success" => false,
                    "message" => "missing userid parameter"
                );
            else if (get_user_by_id($_GET["userid"]) == false)
                $response = array(
                    "success" => false,
                    "message" => "there exists no user with id '$_GET[userid]'"
                );
            else {
                delete_user($_GET["userid"]);
                $response = array(
                    "success" => true,
                    "message" => "user with id '$_GET[userid]' was deleted"
                );
            }
        } else if ($_GET["action"] == "delete_photo") {
            if (!isset($_GET["photoid"]))
                $response = array(
                    "success" => false,
                    "message" => "missing photoid parameter"
                );
            else if (get_photo_by_id($_GET["photoid"]) == false)
                $response = array(
                    "success" => false,
                    "message" => "there exists no photo with id '$_GET[photoid]'"
                );
            else {
                delete_photo($_GET["photoid"]);
                $response = array(
                    "success" => true,
                    "message" => "photo with id '$_GET[photoid]' was deleted"
                );
            }
        }
    }

    header("Content-Type: application/json");
    echo json_encode($response);