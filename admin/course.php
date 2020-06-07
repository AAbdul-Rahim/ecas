<?php

    include_once '../config.php';

    if(isset( $_SESSION['adminName'])){

        if (isset($_POST['submit'])) {
            
            $level = $_POST['level'];
            $trim = $_POST['trim'];
            $courseCode = $_POST['courseCode'];
            $courseName = $_POST['courseName'];

            $query = mysqli_query($connect,"SELECT * FROM course_info WHERE courseCode = '$courseCode' ");

            $count = mysqli_num_rows($query);

            if ($count === 1) {
                
                $_SESSION['fail_msg'] = "course details already added";
            }
            else{

                $register = mysqli_query($connect,"INSERT INTO course_info(level,trim,courseCode,courseName) VALUES('$level','$trim','$courseCode','$courseName')");
                $_SESSION['success_msg'] = "student details added successfully";
            }
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

        <title>ECAS | COURSE DETAILS</title>
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
                                    <li><a href="dashboard.php">home</a></li>
                                    <li><a href="student.php">add students</a></li>
                                    <li><a href="program.php">add program</a></li>
                                    <li><a href="course.php" class="current">course details</a></li>
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
                            <h6>course details</h6>
                        </div>

                        <div class="msg">

                            <?php if (isset($_SESSION['fail_msg'])): ?>

                                <div id="fail_msg">

                                    <?php 

                                        echo $_SESSION['fail_msg'];
                                        unset($_SESSION['fail_msg']);

                                    ?>
                                        <div id="close">+</div>
                                </div>

                            <?php elseif(isset($_SESSION['success_msg'])): ?>

                                <div id="success_msg">

                                    <?php 

                                        echo $_SESSION['success_msg'];
                                        unset($_SESSION['success_msg']);

                                    ?>
                                    <div id="close">+</div>
                                </div>

                            <?php endif ?>
                        </div>


                        <!-- form box -->
                        <div class="dash_form_box">
                            <h6>add courses</h6>

                            <form action="" method="post" class="form2">
                                <div>

                                    <!-- level  -->
                                    <select name="level" id="" required>
                                        <option>Level</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="300">300</option>
                                        <option value="400">400</option>
                                    </select>

                                    <!-- trimester -->
                                    <select name="trim" id="" required>
                                        <option>Select Trimester</option>
                                        <option value="first Trimester">First Trimester</option>
                                        <option value="second Trimester">second Trimester</option>
                                    </select>
                                </div>

                                <div>
                                    <input type="text" name="courseCode" id="" placeholder="Course Code" required>

                                    <input type="text" name="courseName" id="" placeholder="Course Name" required>
                                </div>

                                <div>
                                    <input type="submit" name="submit" value="add course">
                                </div>
                            </form>
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
<?php
    }
    elseif (!isset( $_SESSION['adminName'])) {
        
        header('location: login.php');
    }
?>