<?php
require 'config/db.php';
session_start();
// Check user login or not
if (!isset($_SESSION['login_user'])) {
    header('Location: login.php');
}


// logout  
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Demo Institute</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>

<body>


    <nav class="navbar sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="javascript:void(0)">
            <img class="" src="" height=""> Demo Institute
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Welcome <?php echo $_SESSION['admin_name']; ?> !</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="container-fluid">

            <main role="main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h1">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <form method="POST" enctype="multipart/form-data">
                                <button type="submit" name="but_logout" class="btn btn-sm btn-outline-danger"><i class="fa fa-sign-out"></i> Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
                <h3 class="text-center">Student Details</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm" id="table_id">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Candidate Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Category</th>
                                <th>Phone</th>
                                <th>Permanent Address</th>
                                <th>Course Name</th>
                                <th>Board</th>
                                <th>Pass Year</th>
                                <th>Exam 1</th>
                                <th>Exam 2</th>
                                <th>Exam 3</th>
                                <th>Exam 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Attempt select query execution
                            $sql = "SELECT * FROM `candidate` INNER JOIN `course` ON `candidate`.`id`= `course`.`id` INNER JOIN `c_education` ON `candidate`.`id` = `c_education`.`id` INNER JOIN `c_address` ON `candidate`.`id` = `c_address`.`id` ORDER BY  `candidate`.`id`";
                            if ($result = mysqli_query($conn, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><a href="print_pdf.php?c_id=<?php echo $row['id']; ?>"><?php echo $row['candidate_name']; ?></a></td>
                                        <td><?php echo $row['father_name']; ?></td>
                                        <td><?php echo $row['mother_name']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['r_village'] . "," . $row['r_post_office'] . "," . $row['r_district'] . "," . $row['r_pin'] . "," . $row['r_state']; ?></td>
                                        <td><?php echo $row['course_name']; ?></td>
                                        <td><?php echo $row['board']; ?></td>
                                        <td><?php echo $row['pass_year1']; ?></td>
                                        <td><?php echo $row['exam_name1'] . "," . $row['board_name1'] . "," . $row['passing_year1'] . "," . $row['percentage1']; ?></td>
                                        <td><?php echo $row['exam_name2'] . "," . $row['board_name2'] . "," . $row['passing_year2'] . "," . $row['percentage2']; ?></td>
                                        <td><?php echo $row['exam_name3'] . "," . $row['board_name3'] . "," . $row['passing_year3'] . "," . $row['percentage3']; ?></td>
                                        <td><?php echo $row['exam_name4'] . "," . $row['board_name4'] . "," . $row['passing_year4'] . "," . $row['percentage4']; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    // Free result set
                                    mysqli_free_result($result);
                                } else {
                                    echo "<script>
                                        alert('No records matching your query were found.');
                                    </script>";
                                }
                            } else {
                                echo "<script>
                        alert('ERROR: Could not able to execute $sql. '.mysqli_error($conn)
                                ');
                    </script>";
                            }

                            // Close connection
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>