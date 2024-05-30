<?php
    session_start();

    $_SESSION['page_title'] = 'Admissions';

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

    $sql = "SELECT * from admissions";
    $result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>
    <?php
        include 'admin/adminnav.php';
    ?>
        <center>
            <div class="content">
                <h1>Applied Admissions</h1>

                <table border="1px" class="table table-striped" style="width: 75%;">
                    <thead>
                        <tr>
                            <th scope="col" style="padding: 20px; font-size: 15px;">Name</th>
                            <th scope="col" style="padding: 20px; font-size: 15px;">Email</th>
                            <th scope="col" style="padding: 20px; font-size: 15px;">Phone</th>
                            <th scope="col" style="padding: 20px; font-size: 15px;">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($info = $result -> fetch_assoc()){
                        ?>
                            <tr>
                                <td style="padding: 20px;">
                                    <?php echo "{$info['name']}"; ?>
                                </td>
                                <td style="padding: 20px;">
                                    <?php echo "{$info['email']}"; ?>
                                </td>
                                <td style="padding: 20px;">
                                    <?php echo "{$info['phone']}"; ?>
                                </td>
                                <td style="padding: 20px;">
                                    <?php echo "{$info['message']}"; ?>
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
