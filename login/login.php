<?php
    require_once "../php/user.php";
    require_once "../php/microsoft_login.php";

    if(get_signed_in_user_id()!==-1) {
        header('Location: ./abmelden.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>BP | Login</title>
    <script type="text/javascript" src="../assets/scripts/login.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<style>
    body {
        background: url("../assets/images/login.jpg") no-repeat;
        font-family: acumin-pro, sans-serif;
        background-size: 100%;
    }

    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 440px;
        margin: 7em auto;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }

    .sign {
        color: #5B5FE3;
        font-family: 'acumin-pro', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }

    .un {
        width: 76%;
        color: rgb(38, 50, 56);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        border: none;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        margin-bottom: 50px;
        margin-left: 46px;
        text-align: center;
        margin-bottom: 27px;
        font-family: 'acumin-pro', sans-serif;
    }

    form.form1 {
        padding-top: 40px;
    }

    .pass {
        width: 76%;
        color: rgb(38, 50, 56);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        margin-bottom: 50px;
        margin-left: 46px;
        text-align: center;
        margin-bottom: 27px;
        font-family: 'acu', sans-serif;
    }


    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;

    }

    .submit {
        cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #5B5FE3, #70C8FA);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'acumin-pro', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.04);
    }

    .login {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #5B5FE3;
        padding-top: 10px;
    }

    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #5B5FE3;
        text-decoration: none
    }

    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
    }

    .close {
        width: 30px;
        height: 30px;
        position: relative;
    }
    .close:after {
        content: '';
        height: 30px;
        border-left: 2px solid #5B5FE3;
        position: absolute;
        transform: rotate(45deg);
        left: 20px;
        top:5px;
    }

    .close:before {
        content: '';
        height: 30px;
        border-left: 2px solid #5B5FE3;
        position: absolute;
        transform: rotate(-45deg);
        left: 20px;
        top:5px;
    }

    /* The alert message box */
    .alert {
        padding: 20px;
        background-color: #f25022;
        color: white;
        margin-bottom: 15px;
        display: none;
    }

    /* The close button */
    #closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        display: none;
    }

    .microsoft-logo{
        width:44px;
        margin:20px auto;
    }
    .square {
        width: 20px;
        height: 20px;
        margin:0;
        float:left;
    }
    .square.red{
        background-color:#F35325;
        margin-left: 178px;
        margin-top: 40px;
    }
    .square.green{
        background-color:#81BC06;
        margin-top: 40px;
    }
    .square.blue{
        background-color:#05A6F0;
        margin-left: 178px;
    }
    .square.yellow{background-color:#FFBA08;}
    .row {
        display: flex;
    }
</style>

<body>

    <div class="alert" id="alert">
        <span id="closebtn">&times;</span>
        <div id="error"></div>
    </div>

    <div class="main" id="main">
        <a href="../index.php"> <div class="close"></div></a>
        <p class="sign" align="center" id="if">Anmelden</p>
        <form class="form1">
            <input class="un " type="text" align="center" placeholder="E-Mail" id="email">
            <input class="pass" type="password" align="center" placeholder="Passwort" id="password">
            <a class="submit" align="center" id="submit">Login</a><br>
            <a href="<?php echo get_login_url() ?>" class="microsoft-logo">
                <div class="row">
                    <div class="square red"></div>
                    <div class="square green"></div>
                </div>
                <div class="row">
                    <div class="square blue"></div>
                    <div class="square yellow"></div>
                </div>
            </a>
            <p class="login" align="center"><a href="registrieren.html">Registrieren</a></p>
        </form>
    </div>

</body>
</html>

