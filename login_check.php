<?php

    error_reporting(0);
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "school_management";

    $data = mysqli_connect($host, $user, $password, $db);

    if($data===false)
    {
        die("connection failed");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where username='" . $username . "' AND password='" . $password . "'";

        $result = mysqli_query($data, $sql);

        $row = mysqli_fetch_array($result);


        if($row["user_type"] == 'student'){

            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $row["user_type"];
            header("location:studenthome.php");

        } elseif($row["user_type"] == 'admin'){

            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $row["user_type"];
            header("location:adminhome.php");

        } else {

            $message = "username and password do not match";
            $_SESSION['loginMessage'] = $message;

            header("location:login.php");

        }
    }

    
?>
