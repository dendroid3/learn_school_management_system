<head>
    <meta charset="utf-8">
    <?php
    if(!isset($_SESSION['page_title'])){
        echo '<title>Admin Dashboard</title>';
    } else {
        $page_title = implode(" ", explode("_", $_SESSION['page_title']));
        echo '<title>' . $page_title . '</title>';
    }
    ?>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="./adminhome.php" class="anchor">Admin Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="anchor btn btn-primary">logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="admissions.php" id="Admissions" class="anchor">Admission</a>
            </li>
            <li>
                <a href="addstudent.php" id="Add_student" class="anchor">Add Student</a>
            </li>
            <li>
                <a href="viewstudent.php" id="View_student" class="anchor">View Student</a>
            </li>
            <li>
                <a href="addteacher.php" id="Add_teacher" class="anchor">Add Teacher</a>
            </li>
            <li>
                <a href="viewteacher.php" id="View_teacher" class="anchor">View Teacher</a>
            </li>
            <li>
                <a href="addcourses.php" id="Add_courses" class="anchor">Add Courses</a>
            </li>
            <li>
                <a href="viewcourses.php" id="View_courses" class="anchor">View Courses</a>
            </li>
        </ul>
    </aside>

    <?php
        $element_id = implode("_", explode(" ", $_SESSION['page_title']));
        echo "
            <script>
                let  page_title = '" . $element_id  ."'
                let affected_link = document.getElementById(page_title)
                affected_link.classList.add('highlighted_anchor')
            </script>
        ";
    ?>

