<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['application_message']){
        $message = $_SESSION['application_message'];

        echo "<script type='text/javascript'> alert('$message') </script>'";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>School Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include 'navbar.php'
        ?>

        <div class="section1">
            <label class="image_text"> We teach student with care</label>
            <img src="./images/school_management.jpg" alt="school_management" class="main_img">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/school2.jpg" alt="school2" class="welcome_img">
                </div>
                <div class="col-md-8">
                    <h1>Welcome To WSchool</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deleniti optio velit facere, veniam nostrum eum qui. Aspernatur id reiciendis pariatur, voluptas dolorum quas consectetur nobis provident dignissimos atque architecto deleniti voluptates molestias iste error dolorem assumenda cum a beatae nisi laudantium. Commodi, cum labore nemo aut minima dicta molestias animi modi eligendi ad porro blanditiis quo maxime quasi perspiciatis beatae sapiente iure suscipit dolorem odio nisi amet, illum sed voluptate? Assumenda natus quidem quisquam qu
                    </p>
                </div>
            </div>
        </div>

        <center>
            <h1>Our Teachers</h1>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/teacher1.jpg" alt="teacher1" class="teacher">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid pariatur quasi consectetur ducimus reiciendis quidem!</p>
                </div>
                <div class="col-md-4">
                    <img src="./images/teacher2.jpg" alt="teacher2" class="teacher">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid pariatur quasi consectetur ducimus reiciendis quidem!</p>
                </div>
                <div class="col-md-4">
                    <img src="./images/teacher3.jpg" alt="teacher3" class="teacher">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid pariatur quasi consectetur ducimus reiciendis quidem!</p>
                </div>
            </div>
        </div>

        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/graphics.jpg" alt="graphics" class="teacher">
                    <h3>Graphics Design</h3>
                </div>
                <div class="col-md-4">
                    <img src="./images/marketing.jpg" alt="marketing" class="teacher">
                    <h3>Marketing</h3>
                </div>
                <div class="col-md-4">
                    <img src="./images/web.jpg" alt="web" class="teacher">
                    <h3>Web Development</h3>
                </div>
            </div>
        </div>

        <center>
            <h1>Admission Form</h1>
        </center>

        <div class="admission_form" align="center">
            <form action="data_check.php" method="POST">

                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input type="text" class="input_deg" name="name">
                </div>

                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input type="text" class="input_deg" name="email">
                </div>

                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input type="text" class="input_deg" name="phone">
                </div>

                <div class="adm_int">
                    <label class="label_text">Message</label>
                    <textarea class="input_text_area" name="message"></textarea>
                </div>
                
                <div>
                    <input type="submit" class="btn btn-primary" value="apply" id="submit" name="apply">
                </div>

            </form>
        </div>

        <footer>
            <h3 class="footer_text">All @copyright reserved by ACME Tech</h3>
        </footer>
    </body>
</html>
</html>
