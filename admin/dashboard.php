<?php

    include_once '../config.php';

        
        if(isset($_POST['submit'])){

            $adminName = $_POST['adminName'];
            $password = $_POST['password'];

            $query = mysqli_query($connect,"SELECT * FROM admin_info WHERE adminName = '$adminName' AND password ='$password' ");

                $_SESSION['adminName'] = $adminName;

            $count = mysqli_num_rows($query);

            if ($count === 1) {
                
                header('location: dashboard.php');
            }
            else{

                header('location: login.php');
            }
            $_SESSION['submit'] = 'true';
        }
        elseif (!isset($_SESSION['submit'])) {
            
            header('location: login.php');
        }
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">

        <!-- css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">

        <title>ECAS | ADMIN DASHBOARD</title>
    </head>
    <body>
        <div class="dashboard_container">

            <!--  mini container  -->
            <div class="dashboard_content">

                <!-- top header bg -->
                <div class="login_top_header">

                    <!-- logo -->
                    <div class="sec_logo">
                        <a href="dashboard.php">ecas</a>
                    </div>

                    <div class="top_header_right">
                        <a href="signout.php">
                            <i class="fa fa-power-off"></i>
                            signout
                        </a>
                        
                    </div>

                    <div class="user_info">
                        <h6>welcome <?php echo $_SESSION['adminName']; ?></h6>
                    </div>

                </div>


                <div class="dashboard_img">
                    <h5>exam cell automation system</h5>
                </div>


                <!-- main content -->
                <div class="content">

                    <!-- left side container -->
                    <div class="content_left">

                        <div class="left_top">
                            <h6>admin dashboard</h6>
                        </div>
                        
                        <div class="left_body">
                            <nav>
                                <ul>
                                    <li><a href="dashboard.php" class="current">home</a></li>
                                    <li><a href="student.php">add students</a></li>
                                    <li><a href="program.php">add program</a></li>
                                    <li><a href="course.php">course details</a></li>
                                    <li><a href="hall.php">hall detail</a></li>
                                    <li><a href="seat.php">seating arrangement</a></li>
                                    <li><a href="attend.php">attendance</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>

                    <!-- right side container -->
                    <div class="content_right">

                        <div class="left_top">
                            <h6>home</h6>
                        </div>

                    </div>

                </div>
                <!-- end of main content -->

            </div> 
            
            





            <!-- footer -->
            <?php include_once '../footer.php'; ?>
        </div>

        <!-- js files -->
        <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
        <script src="../js/popper.min.js" charset="utf-8"></script>
        <script src="../js/bootstrap.min.js" charset="utf-8"></script>
        <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
        <script src="../js/main.js" charset="utf-8"></script>
    </body>
</html>
