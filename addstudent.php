<?php
    session_start();

    $_SESSION['page_title'] = 'Add student';

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }

    if($_SESSION['user_type'] !== 'admin'){
        header("location:login.php");
    }

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "school_management";

    $data = mysqli_connect($host, $user, $password, $db);

    if(isset($_POST['Add_student'])){
        $username = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = 'student';

        $check_username = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($data, $check_username);
        $row_count = mysqli_num_rows($check_result);

        if($row_count === 1){
            echo 
            "<script type='text/javascript'>
                alert('Username already taken, please select another username');
            </script>";
        } else {
            $sql = "INSERT INTO users(username, phone, email, password, user_type) VALUES ('$username', '$phone', '$email', '$password', '$user_type')";

            $result = mysqli_query($data, $sql);
    
            if($result){
                echo 
                "<script type='text/javascript'>
                    alert('Student Added Successfully')
                </script>";
            } else {
                echo 
                "<script type='text/javascript'>
                    alert('Student Could not be added')
                </script>";
            }
        }

    }

?>

<!DOCTYPE html>
<html>
    <?php
        include 'admin/adminnav.php';
    ?>
        <center>
            <div class="content">
                <h1>Add Student</h1>

                <div class="div_deg">
                    <form action="#" method="POST">
                        <div>
                            <label>Username</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="text" name="phone">
                        </div>
                        <div>
                            <label>email</label>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="Add_student" value="Add Student">
                        </div>
                    </form>
                </div>
            </div>
        </center>
        <style>
            label{
                text-align: right;
                display: inline-block;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .div_deg{
                background-color: skyblue;
                width: 400px;
                padding: 70px 0;
            }
        </style>
    </body>
</html>


