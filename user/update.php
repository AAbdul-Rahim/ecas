<?php

    include_once '../config.php';

        if (isset($_POST['update'])) {

            $id = $_POST['id'];
            $indexNumber = $_POST['indexNumber'];
            $fullname = $_POST['fullname'];
            $department = $_POST['department'];
            $program = $_POST['program'];
            $level = $_POST['level'];
            $password = md5($_POST['password']);

            $query = mysqli_query($connect,"UPDATE student_info SET  indexNumber = '$indexNumber', fullname = '$fullname', department = '$department', program = '$program', level = '$level', password = '$password' WHERE sid = $id ");

            if ($query) {
                
                $_SESSION['success_msg'] = "record updated successfully.";
                header("location:profile.php");
            
            }
            else {
                
                $_SESSION['fail_msg'] = "record not updated. please try again.";
                header("location:profile.php");
            }

            // $indexNumber $fullname $department $program $level $password 
        }
?>