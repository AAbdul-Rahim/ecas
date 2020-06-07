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

        <title>ECAS | USER LOGIN</title>
    </head>
    <body>
            <!-- login container  -->
            <div class="login_container">
                <!-- top header bg -->
                <div class="login_top_header">

                    <!-- logo -->
                    <div class="sec_logo">
                        <a href="../index.php">ecas</a>
                    </div>

                    <nav class="menus">
                        <ul>
                            <li>
                                <a href="../index.php">
                                    <i class="fa fa-home"></i>
                                    home
                                </a>
                            </li>

                            <li><a href="../admin/login.php">admin login</a></li>
                            <li>
                                <a href="login.php">
                                    <i class="fa fa-users"></i>
                                    login
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

                <!-- image bg  -->
                <div class="login_img">
                    <h5>exam cell automation system</h5>
                </div>

                <!-- form -->
                <div class="form_box">
                    <h4>user login</h4>

                    <form action="dashboard.php" class="form1" method="POST">

                        <div class="form_fields">

                            <div class="fields_label">user id</div>
                            <i class="fa fa-user"></i>
                            <input type="text" name="indexNumber" id="" required placeholder="FMS/4739/12">

                        </div>

                        <div class="form_fields">

                            <div class="fields_label">password</div>
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" id="" required>

                        </div>
                        <input type="submit" name="submit" value="submit">

                        <p>first time login, use <span>password = 12345 </span></p>
                    </form>

                    
                </div>

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
