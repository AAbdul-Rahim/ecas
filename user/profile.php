<?php

    include_once '../config.php';

        if(isset($_SESSION['submit'])){

        
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

        <title>ECAS | USER PROFILE</title>
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
                        <h6>welcome <?php echo $_SESSION['fullname']; ?></h6>
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
                            <h6>user dashboard</h6>
                        </div>
                        
                        <div class="left_body">
                            <nav>
                                <ul>
                                    <li><a href="dashboard.php">home</a></li>
                                    <li><a href="profile" class="current">profile</a></li>
                                    <li><a href="">check seating</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>

                    <!-- right side container -->
                    
                    <div class="content_right">

                        <div class="left_top">
                            <h6>user profile</h6>
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
                            <h6>edit profile</h6>
                            
                            <form action="update.php" method="post" class="form3">

                                <?php

                                    $query = mysqli_query($connect,"SELECT * FROM student_info WHERE fullname = '$_SESSION[fullname]' ");

                                        while ($row = mysqli_fetch_assoc($query)) {

                                ?>
                                <div>
                                    <input type="hidden" name="id" id="" value="<?php echo $row['sid']; ?>">
                                </div>
                                <div>
                                    <span>student ID:</span>
                                    <input type="text" name="indexNumber" id="" value="<?php echo strtoupper($row['indexNumber']); ?>">
                                </div>
                                <div>
                                    <span>full name:</span>
                                    <input type="text" name="fullname" id="" value="<?php echo ucwords($row['fullname']); ?>">
                                </div>
                                <div>
                                    <span>department:</span>
                                    <input type="text" name="department" id="" value="<?php echo ucwords($row['department']); ?>">
                                </div>
                                <div>
                                    <span>program:</span>
                                    <input type="text" name="program" id="" value="<?php echo ucwords($row['program']); ?>">
                                </div>
                                <div>
                                    <span>level:</span>
                                    <input type="text" name="level" id="" value="<?php echo $row['level']; ?>">
                                </div>
                                <div>
                                    <span>password:</span>
                                    <input type="password" name="password" id="" required>
                                </div>

                                <?php
                                        }
                                ?>

                                <div>
                                    <input type="submit" name="update" value="update">
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
elseif (!isset($_SESSION['submit'])) {
            
            header('location: login.php');
        }
    
?>