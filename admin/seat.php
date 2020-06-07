<?php 

    include_once '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" colspacing="8">

        <input type="text" name="level" placeholder="level">
        <br>
        <br>
        <input type="text" name="cc" placeholder="course code">
        <br>
        <br>
        <input type="submit" name="generate" value="generate">
    </form>




    <table>
        <thead>
            <tr>
                <th>student id</th>
                <th>student name</th>
                <th>department</th>
                <th>program</th>
                <th>course code</th>
                <th>course title</th>
            </tr>
        </thead>

        <tbody>
            <?php 

                $query1 ="SELECT * FROM student_info INNER JOIN course_info WHERE"

            ?>
        </tbody>
    </table>
</body>
</html>
