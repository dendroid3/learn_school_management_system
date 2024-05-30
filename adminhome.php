<?php
    session_start();

    $_SESSION['page_title'] = 'Admin Dashboard';

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

        <div class="content">
            <h1>Admin Dashboard</h1>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, culpa! Qui quas iure aliquam ipsam quia veritatis repudiandae excepturi quibusdam optio magnam fugit assumenda suscipit tempore expedita, maxime officiis beatae esse, unde voluptate sunt a eos? Adipisci odio ex praesentium excepturi eius, fuga corporis dolor fugit tenetur iure placeat recusandae laboriosam delectus atque ducimus veniam error dolorem molestiae distinctio vero quae. Iusto, architecto odio earum assumenda accusantium sapiente odit maxime accusamus! Explicabo dicta, atque similique quaerat rerum ex nostrum quo voluptates assumenda corporis rem dolorem libero qui ullam tenetur porro architecto in soluta eos nobis est, reiciendis amet. Commodi, maxime!
        </div>
    </body>
</html>
