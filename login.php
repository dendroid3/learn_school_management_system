<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body background="./images/school_management.jpg" class="body_deg">
        <?php
            include 'navbar.php'
        ?>
        <center>
            <div class="section1 form_deg">
                <center class="title_deg">
                    Login Form

                    <h5>
                        <?php
                            session_start();
                            error_reporting(0);
                            session_destroy();  
                            echo $_SESSION['loginMessage'];
                        ?>
                    </h5>
                </center>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <label class="label_deg">Passoword</label>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" name="submit" value="login">
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>