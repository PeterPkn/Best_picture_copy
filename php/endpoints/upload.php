<?php
require_once "../user.php";
require_once "../photo.php";
require_once "../contest.php";

$userid = get_signed_in_user_id();
if ($userid == null)
    handleError("not signed in");
if (!isset($_POST["title"]) || !isset($_POST["desc"]))
    handleError("title or description missing");
if (isset($_FILES["file"])) {
//    echo "<pre>\r\n";
//    echo htmlspecialchars(print_r($_FILES, 1));
//    echo "</pre>\r\n";

    $img = image_parse($_FILES["file"]["tmp_name"], $_FILES["file"]["type"]);
    $new_img = image_scaledown($img);

//    echo "<br>" . $userid;

    $photoid = create_image_entry($userid, $_POST["title"], $_POST["desc"]);
    ob_start();
    imagejpeg($new_img, null, 100);
    $size = ob_get_length();
    ob_end_clean();

    $quality = 100;
    if ($size > 1000000)
        $quality = 70;
    imagejpeg($new_img, "../../assets/images/uploads/" . $photoid . ".jpg", $quality);

    if (get_current_contest_id() != -1)
        add_contest_entry($photoid);

//    echo "<br>photo id: $photoid<br>quality: $quality%<br>size: $size";

    header("Location: ../../index.php");
}

/**
 * returns an image resource
 * @param $file_url
 * @param $file_type
 * @return false|resource|null
 */
function image_parse($file_url, $file_type) {
    switch ($file_type) {
        case "image/jpeg":
            return imagecreatefromjpeg($file_url);
        case "image/png":
            return imagecreatefrompng($file_url);
        case "image/gif":
            return imagecreatefromgif($file_url);
    }
    return null;
}

/**
 * scales image down to specified size if larger
 * @param resource $image
 * @param int $max_pixels
 * @return false|resource
 */
function image_scaledown($image, $max_pixels=1920) {
    $orig_w = imagesx($image);
    $orig_h = imagesy($image);
    $new_w = $orig_w;
    $new_h = $orig_h;
    if (max($orig_w, $orig_h) == $orig_w && $orig_w > $max_pixels) {
        $new_w = $max_pixels;
        $new_h = $orig_h / ($orig_w / $max_pixels);
    } else if (max($orig_w, $orig_h) == $orig_h && $orig_h > $max_pixels) {
        $new_h = $max_pixels;
        $new_w = $orig_w / ($orig_h / $max_pixels);
    }
    $new_img = imagecreatetruecolor($new_w, $new_h);
    imagecopyresampled($new_img, $image, 0, 0, 0, 0, $new_w, $new_h, $orig_w, $orig_h);
    return $new_img;
}

function handleError($msg) {
    // TODO proper error handling
    echo $msg;
    exit();
}