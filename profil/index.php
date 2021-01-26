<?php
session_start();
require_once "../php/user.php";
require_once "../php/photo.php";
require_once "../php/contest.php";


if (get_signed_in_user_id() == -1) {
    $url = "../login/needSignIn.html";
    header("Location: " . $url);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link href="../assets/styles/footer.css" rel="stylesheet">
    <link href="../assets/styles/gallery.css" rel="stylesheet">
    <link href="../assets/styles/profil2.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>BP | Profil</title>
</head>
<body>

<?php
$user = get_signed_in_user();
$userid = $user['user_id'];
$name = $user['vorname'] . ' ' . $user['nachname'];
$email = $user['email'];
$likes = get_count_likes_of_user($userid);
$posts = get_count_photos_of_user($userid);
?>
<style>
    @keyframes typewriter {
        from {
            width: 0;
        }
        to {
            width: <?php echo 0.9 * strlen($name)?>em;
        }
    }
</style>
<header>
    <div class="wrapper">
        <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
        <nav>
            <a href="../index.php">Home</a> <?php
            if (get_signed_in_user()['is_admin'] == 1) {
                echo '<a href="../admin%20panel.html">Admin Panel</a>';
            }
            ?> <a href="../login/abmelden.html">Abmelden</a> <a href="../upload/index.php">Upload</a>
            <a href="index.php"> <img class="user" src="../assets/images/user.png" alt="user"> </a>
        </nav>

    </div>
</header>
<main>
    <div class="text content-area">
        <article class="wrapper profil">
            <!--<img class="bo boimg-1" src="../assets/images/Logo_light.jpg" alt="placehold">-->
            <div class="text">
                <p id="h5" class="line-1 anim-typewriter"><?php echo $name ?></p><br>
                <p class="acc" id="mail"><span class="bold"><?php echo $email ?></span></p>
                <p class="acc"><span class="bold"><?php echo $likes ?></span> Likes</p>
                <p class="acc"><span class="bold"><?php echo $posts ?></span> Posts</p>
            </div>
        </article>
    </div>
    <div class="main gallery">
        <p class="u1">Beiträge</p>
        <div class="gallery-image">
            <?php
            $photos = get_all_photos_by_user($userid);

            if (sizeof($photos) == 0) {
                echo " 
                            <p align=\"center\" class=\"un\">Es sind noch keine Bilder vorhanden. <a id='color' href='../upload/index.php'>Klick hier um welche hochzuladen</a></p>             
                      
                ";
            }

            foreach ($photos as $photo) {

                $id = $photo['photo_id'];
                $path = $photo['path'];
                $namePhoto = $photo['title'];
                $photografer = get_username_by_photo($photo['photo_id']);

                echo "<a href='../comment/index.php?id=$id'>
                        <div class='img-box'>
                            <img src='../$path' alt='$namePhoto'/>
                            <div class='transparent-box'>
                                <div class='caption'>
                                    <p>$namePhoto</p>
                                    <p class='opacity-low'>$photografer</p>
                                </div>
                            </div>
                        </div>
                       </a>";
            }
            ?>
        </div>
    </div>
</main>
<footer>
    <p id="contact">Contact</p><br>
    <div class="emails">
        <p><a href="mailto:7046@htl.rennweg.at">BestPicture Team</a></p>
    </div>

    <p class="copyrightfooter">© 2020-2021 <a class="linkhome" href="https://bestpictureproject.ml/index.php">bestpicture.ml</a></p>

    <img class="logofooter" src="../assets/images/Logo.png" alt="logo">
    <a href="../rechte/rechte.php"><p class="agbs">Datenschutzerklärung | AGBs</p></a>
</footer>
</body>
</html>
