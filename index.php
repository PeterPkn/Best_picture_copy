<?php
session_start();
require_once "php/contest.php";
require_once "php/photo.php";
require_once "php/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BP | Startseite</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
    <link href="assets/styles/main.css" rel="stylesheet">
    <link href="assets/styles/navbar.css" rel="stylesheet">
    <link href="assets/styles/gallery.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <script>
        'use strict';
        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "Feb 07, 2021 00:00:00",
                countDown = new Date(birthday).getTime(),
                x = setInterval(function () {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("erg");

                        headline.innerText = "Best Picture gewonnen hat: Name";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
</head>

<body>
<!--<script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script>
<script> window.start.init({Palette: "palette6", Mode: "floating left", Theme: "wire", Time: "1",})</script> -->

<?php
$contestid = get_last_finished_contest_id();
if (gettype($contestid) != 'NULL') {
    $winner = get_contest_winner($contestid)['photo_id'];
    $winnerphoto = get_photo_by_id($winner)['path'];
} else {
    $winnerphoto = 'assets/images/mountain.jpg';
}
?>
<style>
    .hintergrund {
        background-image: url("<?php echo $winnerphoto ?>");
    }
</style>

<div class="box-area">
    <header>
        <div class="wr">
            <a href="index.php"> <img class="logo" src="assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="index.php">Home</a>
                <?php echo((get_signed_in_user_id() !== -1) ? '<a href="login/abmelden.html">Abmelden</a>' : '<a href="login/login.php">Anmelden</a>'); ?>
                <a href="upload/index.php">Upload</a>
                <a href="profil/index.php"> <img class="user" src="assets/images/user.png" alt="user">
                </a>
            </nav>
        </div>
    </header>
</div>
<div class="main hintergrund">
    <img class="bestpicture" src="assets/images/bestpicture.png" alt="Bestpicture">
</div>

<div class="text content-area">
    <h2>Best Picture </h2>
    <div class="container">
        <div class="item1">
            <p class="ue1">Fotowettbewerb HTL Rennweg</p>
            <p class="input">
                Grundgedanke des Projektes ist, dass alle Schüler*innen der HTL Rennweg die Möglichkeit bekommen, ihre
                eigenen Fotos in einem Wettbewerb zu veröffentlichen. Da unser Projekt ein Teil unserer Ausbildung an
                der
                HTL Rennweg ist, liegt es nahe, diesen Wettbewerb online auf einer Website zu verrichten. Das ist in der
                momentanen Krisensituation dank COVID-19 vorteilhaft, da an dem Wettbewerb auch von Zuhause aus
                teilgenommen werden kann.
            </p>
            <p>Um an einem Wettbwerb teilnehmen zu können musst du folgende Schritte befolgen: <br>
            <ul class="input">
                <li>
                    Melde dich an.
                </li>
                <li>
                    Lade ein Bild hoch, um an dem Wettbewerb teilzunehmen. Die Anzahl der Bilder, welche du hochladen
                    möchtest ist dir überlassen.
                </li>
                <li>
                    Auf unserer Startseite werden in einer Gallerie alle Bilder der Teilnehmer des aktuellen Wettbewerbs
                    dargestellt.
                </li>
                <li>
                    Um genauere Informationen über ein Bild zu bekommen, gelangt man durch einen Klick auf die Infoseite
                    des ausgewählten Bildes.
                </li>
                <li>
                    Auf dieser Seite kannst du das Bild bewerten und einen Kommentar verfassen.
                </li>
            </ul>
        </div>
        <div class="item2">
            <p class="ue1">Gewinner 20/21</p>
            <div class="countdown">
                <div id="countdown">
                    <ul>
                        <li><span id="days"></span>Tage</li>
                        <li><span id="hours"></span>Stunden</li>
                        <li><span id="minutes"></span>Minuten</li>
                        <li><span id="seconds"></span>Sekunden</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main gallery">
    <p class="u1">Gallery</p>
    <div class="gallery-image">
        <?php
        $photos = get_all_photos_in_contest(get_current_contest_id());

        foreach ($photos as $photo) {

            $id = $photo['photo_id'];
            $path = $photo['path'];
            $namePhoto = $photo['title'];
            $photografer = get_username_by_photo($photo['photo_id']);

            echo "<a href='comment/index.php?id=$id'>
                        <div class='img-box'>
                            <img src='$path' alt='$namePhoto'/>
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
<div class="foot">
    <footer>
        <p id="contact">Contact</p><br>
        <div class="emails">
            <p><a href="mailto:7046@htl.rennweg.at">BestPicture Team</a></p>
        </div>
        <img class="logofooter" src="assets/images/Logo.png" alt="logo"><br>
        <p class="copyrightfooter">© 2020-2021 <a class="linkhome" href="https://bestpictureproject.ml/index.php" >bestpicture.ml</a></p>
        <a href="rechte/rechte.php"><p class="agbs">Datenschutzerklärung | AGBs</p></a>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": { "background": "rgba(240,240,248,0.7)", "text": "#fffff"},
            "button": { "background": "#5B5FE3"}},
        "theme": "edgeless",
        "position": "bottom-left",
        "content": {
            "message": "Diese Webseite verwendet Cookies, um Ihnen ein angenehmeres Surfen zu ermöglichen.",
            "dismiss": "Got it!",
            "link": "Learn more",
            "href": "https://www.cookiesandyou.com/"
        }
    });
</script>
</body>
</html>

