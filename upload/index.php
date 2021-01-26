<?php
session_start();
require_once "../php/user.php";
if (get_signed_in_user_id() == -1) {
    $url="../login/needSignIn.html";
    header("Location: " . $url);
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BP | Upload</title>
    <link href="../assets/styles/upload.css" rel="stylesheet">
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link href="../assets/styles/footer.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="../index.php">Home</a> <a href="../login/abmelden.html">Abmelden</a> <a href="index.php">Upload</a><a
                    href="../profil/index.php"> <img class="user" src="../assets/images/user.png" alt="user"> </a>
            </nav>
        </div>
    </header>
    <main>
        <section class="main">
            <form class="form" method="post" action="../php/endpoints/upload.php" enctype="multipart/form-data" class="form1">
                <div>
                    <a href="../index.php"> <div class="close"></div></a>
                    <p class="sign" align="center">Upload</p>
                    <label>
                        <input type="text" name="title" placeholder="Name des Bildes" class="un ">
                    </label><br>
                    <label>
                        <textarea name="desc" placeholder="Beschreibung des Bildes" class="un "></textarea>
                    </label>
                </div>
                <div>
                    <div class="input-file-container">
                        <input class="input-file" id="file" name="file" type="file">
                        <label tabindex="0" for="file" class="input-file-trigger">Choose file</label>
                    </div>
                    <p class="file-return"></p>
                    <button type="submit" class="submit">Upload</button><br>
                    <label>
                        <input type="checkbox" name="check" id="agb" value="1" required><a href="../rechte/rechte.php">AGBs</a> zustimmen<br>
                    </label>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p id="contact">Contact</p><br>
        <div class="emails">
            <p><a href="mailto:7046@htl.rennweg.at">BestPicture Team</a></p>
        </div>
        <img class="logofooter" src="../assets/images/Logo.png" alt="logo"><br>
        <p class="copyrightfooter">© 2020-2021 <a class="linkhome" href="https://bestpictureproject.ml/index.php" >bestpicture.ml</a></p>
        <a href="../rechte/rechte.php"><p class="agbs">Datenschutzerklärung | AGBs</p></a>
    </footer>
</body>
<script>
    document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-file" ),
        button     = document.querySelector( ".input-file-trigger" ),
        the_return = document.querySelector(".file-return");

    button.addEventListener( "keydown", function( event ) {
        if ( event.keyCode == 13 || event.keyCode == 32 ) {
            fileInput.focus();
        }
    });
    button.addEventListener( "click", function( event ) {
        fileInput.focus();
        return false;
    });
    fileInput.addEventListener( "change", function( event ) {
        const path_split = this.value.split(/[\\/]/);
        the_return.innerHTML = path_split[path_split.length - 1];
    });
</script>
</html>
