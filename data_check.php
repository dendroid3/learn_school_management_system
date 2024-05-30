<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "school_management";

    $data = mysqli_connect($host, $user, $password, $db);

    if($data == false)
    {
        die("connection error");
    }

    if(isset($_POST['apply']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT into admissions(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

        $result = mysqli_query($data,$sql);

        if($result){
            $_SESSION['application_message'] = "Application Successful";
            header("location:index.php");
        } else {
            echo "Application Failed";
        }

    }

?>
