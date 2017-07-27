<?
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/template.css" type="text/css" />
        <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
        <script type="text/javascript" src="js/js.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>
            Chat
        </title>
    </head>
        <body>
        <div id="bg">
            <img src="images/bg.jpg" alt="">
        </div>
        <div id="content">
        <div class="row">
            <div class="col-sm-1 col-sm-offset-5"><input class="choose r btn btn-default" type="submit" name="registration" value="Sign Up"/></div>
            <div class="col-sm-6"><input class="choose l btn btn-default right" type="submit" name="login" value="Login"/></div>

        </div>
            <div class="col-sm-1 col-sm-offset-5">
                <form id="register" name="registration" action="checkreg.php" method="post">
                <label>Login: </label><br>
                <input type="text" name="loginreg" placeholder="Login" /><br>
                <label>Password: </label><br>
                <input type="password" name="passwordreg" placeholder="Пароль" /><br>
                    <label>Password again: </label><br>
                    <input type="password" name="password2reg" placeholder="Password again" /><br>
                <label>E-mail: </label><br>
                <input type="text" name="email" placeholder="E-mail" /><br><br>
                <input type="submit" class="btn" value="Sign Up"/>
                </form>
            </div>
            <div class="col-sm-6">
            <form id="login" class="right" name="login" action="checklog.php" method="post">
                <label>Login: </label><br>
                <input type="text" name="loginlog" placeholder="Login" /><br>
                <label>Password: </label><br>
                <input type="password" name="passwordlog" placeholder="Password" /><br><br>
                <input type="submit" class="btn" value="Login"/>
            </form>
            </div>
        </div>


        </body>
    </html>