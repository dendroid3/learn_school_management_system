<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }

    if($_SESSION['user_type'] !== 'student'){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <header class="header">
            <a href="" class="anchor">Student Dashboard</a>
            <div class="logout">
                <a href="logout.php" class="anchor btn btn-primary">logout</a>
            </div>
        </header>

        <aside>
            <ul>
                <li>
                    <a href="" class="anchor">My Courses</a>
                </li>
                <li>
                    <a href="" class="anchor">My Results</a>
                </li>
            </ul>
        </aside>

        <div class="content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, culpa! Qui quas iure aliquam ipsam quia veritatis repudiandae excepturi quibusdam optio magnam fugit assumenda suscipit tempore expedita, maxime officiis beatae esse, unde voluptate sunt a eos? Adipisci odio ex praesentium excepturi eius, fuga corporis dolor fugit tenetur iure placeat recusandae laboriosam delectus atque ducimus veniam error dolorem molestiae distinctio vero quae. Iusto, architecto odio earum assumenda accusantium sapiente odit maxime accusamus! Explicabo dicta, atque similique quaerat rerum ex nostrum quo voluptates assumenda corporis rem dolorem libero qui ullam tenetur porro architecto in soluta eos nobis est, reiciendis amet. Commodi, maxime!
        </div>
    </body>
</html>
