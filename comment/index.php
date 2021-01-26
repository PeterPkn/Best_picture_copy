<?php
    session_start();
    require_once "../php/comment.php";
    require_once "../php/photo.php";
    require_once "../php/user.php";

    if(isset($_GET['id'])) {
        if(!is_array(get_photo_by_id($_GET['id']))) {
            http_response_code(404);
            die();
        }
    }
    else {
        http_response_code(404);
        die();
    }
?>
<!DOCTYPE html>ASD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BP | Info</title>

    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
    <link href="../assets/styles/footer.css" rel="stylesheet">
    <link href="../assets/styles/comment.css" rel="stylesheet">
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <script type="text/javascript" src="../assets/scripts/comment.js"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="../index.php">Home</a>
                <?php echo ((get_signed_in_user_id()!==-1) ? '<a href="../login/abmelden.html">Abmelden</a>' : '<a href="../login/login.php">Anmelden</a>'); ?>
                <a href="../upload/index.php">Upload</a>
                <a href="../profil/index.php"> <img class="user" src="../assets/images/user.png" alt="user">
                </a>
            </nav>
        </div>
    </header>

    <section>
        <section id="section_left">
            <article>
                <?php
                    $id=$_GET['id'];
                    $photo= get_photo_by_id($id);
                    $path = '../' .$photo['path'];
                    $namePhoto = $photo['title'];
                    $photografer = get_username_by_photo($id);
                    $date = get_date_by_photoid($id);
                    $beschreibung = $photo['description'];
                    $likes = get_count_likes_by_photo($id);

                    echo " <img src='$path' id='upload' alt='$namePhoto'>";
                ?>

            </article>

            <article id="lesezeichen">
                <div id="lesezeichen_left">
                    <?php
                        if(if_user_liked_photo($id, get_signed_in_user_id())) {
                            echo '<img src="../assets/images/heart_full.png" id="heart" alt="Herz">';
                        }
                        else {
                            echo '<img src="../assets/images/heart.png" id="heart" alt="Herz">';
                        }
                    ?>
                    <div id="likes"><?php echo $likes ?></div>
                </div>
            </article>

            <article id="kommentar">
                <h3>Kommentare...</h3>
                <div class="myBox" id="myBox">
                    <?php
                        $comments = getComments($id);
                        foreach ($comments as $comment) {
                            $nameCommentator = $comment['Name'];
                            $txtComment = $comment["text"];
                            echo "
                            <div>
                                <div>$nameCommentator</div>
                                <div>$txtComment</div>
                            </div>";
                        }
                    ?>
                </div>
                <form action="javascript:void(0);" class="co">
                    <input type="text" id="text" placeholder="Kommentar hinzufügen...">
                    <a id="submit">Posten</a>
                </form>
            </article>
        </section>

        <section id="section_right">
            <article id="nebeneinander">
                <div>
                    <div><?php echo htmlspecialchars($namePhoto) ?></div>
                    <div><?php echo $photografer ?></div>
                    <div><?php echo $date ?></div>
                </div>

                <div>
                    <img src="../assets/images/Logo_light.jpg" alt="Fotograf" id="profilbild">
                </div>
            </article>

            <article>
                <h1>Beschreibung des Bildes:</h1>
                <p id="beschreibung">
                    <?php echo htmlspecialchars($beschreibung) ?>
                </p>
            </article>
        </section>
    </section>

    <footer>
        <p id="contact">Contact</p><br>
        <div class="emails">
            <p><a href="mailto:7046@htl.rennweg.at">Dietrich Kops</a></p>
            <p>●</p>
            <p><a href="mailto:7047@htl.rennweg.at">Johanna Kronfuß</a></p>
            <p>●</p>
            <p><a href="mailto:7055@htl.rennweg.at">Nils Schneider-Sturm</a></p>
            <p>●</p>
            <p><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Sartori</a></p>
        </div>

        <img class="logofooter" src="../assets/images/Logo.png" alt="logo"><br>
        <a href="../rechte/rechte.php"><p class="agbs">Datenschutzerklärung | AGBs</p></a>
    </footer>
</body>
</html>
