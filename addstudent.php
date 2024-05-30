<?php
    session_start();

    $_SESSION['page_title'] = 'Add student';

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }

    if($_SESSION['user_type'] !== 'admin'){
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html>
    <?php
        include 'admin/adminnav.php';
    ?>
        <center>
            <div class="content">
                I am add student
            </div>
        </center>
    </body>
</html>


