<?php
    session_start();

    $_SESSION['page_title'] = 'View student';

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

    $sql = "SELECT * FROM users WHERE user_type = 'student'";

    $result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>
    <?php
        include 'admin/adminnav.php';
    ?>
        <center>
            <div class="content">
                <h1>Student Data</h1>

                <table class="table" style="width: 75%;">
                    <thead>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        <?php
                            while($info = $result->fetch_assoc()){
                        ?>
                            <tr style="padding: 20px;">
                                <td>
                                    <?php
                                        echo "{$info['username']}";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo "{$info['phone']}";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo "{$info['email']}";
                                    ?>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </center>
    </body>
</html>


