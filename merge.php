<?php

include_once 'config.php';

// $studentA =['Abdul', 'Chamtooni', 'Mudi', 'toni', 'rebbery'];
// $studentB = ['Don','Critical', 'wunnam', 'critical', 'sheikh'];
// $list = [];

// $j = 0;
// for ($i = 0; $i < count(array_merge($studentA,$studentB)); $i++){
//     $list[$i] = $studentA[$j];
//     $i++;
//     $list[$i]= $studentB[$j];
//     $j++;
// }
// print_r($list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale = 1.0">
      
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
</head>
<body>
<form action="merge.php" method="POST" colspacing="7">
    <input type="text" name="year1" placeholder="Level. Eg 19">
    <input type="text" name="first" placeholder="pro code">
    <input type="text" name="level1" placeholder="level">
    <input type="text" name="cc" placeholder="Course Code">
    <input type="submit" value="Generate List" name="gl">
    <input type="submit" value="Print List" name="pl"><br>
    <br><br>
    <input type="text" name="year2" placeholder="Level. Eg 16">
    <input type="text" name="next" placeholder="pro code">
    <input type="text" name="level2" placeholder="level">
    <input type="text" name="cc2" placeholder="Course Code">
    <input type="submit" value="Generate List" name="gl2">
    <input type="submit" value="Print List" name="pl"><br>
    <br>

                <input type="submit" value="Generate S.A" name="generate"><br>
            </form>
<br>
<br>
<table  border="4">
<tr>
<th><input type="text" name="row" placeholder="Row number"></th>
<th colspan="5"><input type="text" name="programme" placeholder="Programmes in this row" style="width:100%;"></th>
</tr>
<tr>
                        <th>Student Id</th>
                        <th>Student Name</th>
			            <th>Programme</th>
                        <th>Department</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th> Signature </th>
                    </tr>
                
<?php 

// generate First level list... that is those writing the exams


// Generating sitting arrangement list query
if (isset($_POST['generate'])) {
  
 
    $sql="SELECT * from students INNER join courses where students.pro_code like '%".$_POST['first']."%' and students.studentId like '%".$_POST['year1']."%' and courses.courseName like '%".$_POST['cc']."%' and courses.level like '%".$_POST['level1']."%'
    order by  students.StudentName ASC";
    
    $data=mysqli_query($connect,$sql);
    
    $sql2="SELECT * from students INNER join courses where students.pro_code like '%".$_POST['next']."%' and students.studentId like '%".$_POST['year2']."%' and courses.courseName like '%".$_POST['cc2']."%' and courses.level like '%".$_POST['level2']."%'
    order by  students.StudentName ASC";
    $data2=mysqli_query($connect,$sql2);  



while ($result=mysqli_fetch_assoc($data) and $result2=mysqli_fetch_assoc($data2)) {
  ?>
   <tr>
				
                        <td><?php echo $result['studentId']; ?></td>
                       <td><?php echo $result['StudentName']; ?> </td>
                       <td><?php echo $result['programme']; ?></td>
                       <td><?php echo $result['department']; ?></td>
                       <td><?php echo $result['courseCode']; ?></td>
                       <td><?php echo $result['courseName']; ?></td>
                       </tr>
                       <tr>
                       <td><?php echo $result2['studentId']; ?></td>
                       <td><?php echo $result2['StudentName']; ?> </td>
                       <td><?php echo $result2['programme']; ?></td>
                       <td><?php echo $result2['department']; ?></td>
                       <td><?php echo $result2['courseCode']; ?></td>
                       <td><?php echo $result2['courseName']; ?></td>
                       
                     
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                            
                        </td>
                    </tr>
 <?php } }
 elseif (isset($_POST['gl'])) {
    $sql="SELECT * from students INNER join courses where students.pro_code like '%".$_POST['first']."%' and students.studentId like '%".$_POST['year1']."%' and courses.courseName like '%".$_POST['cc']."%' and courses.level like '%".$_POST['level1']."%'
    order by  students.StudentName ASC";
     $data=mysqli_query($connect,$sql);

     
while ($result=mysqli_fetch_assoc($data)) {
    ?>
     <tr>
                  
                          <td><?php echo $result['studentId']; ?></td>
                         <td><?php echo $result['StudentName']; ?> </td>
                         <td><?php echo $result['programme']; ?></td>
                         <td><?php echo $result['department']; ?></td>
                         <td><?php echo $result['courseCode']; ?></td>
                         <td><?php echo $result['courseName']; ?></td>
                        
                          <td>
                              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                              
                          </td>
                      </tr>
   <?php } }
 elseif (isset($_POST['gl2'])) {
    $sql2="SELECT * from students INNER join courses where students.pro_code like '%".$_POST['next']."%' and students.studentId like '%".$_POST['year2']."%' and courses.courseName like '%".$_POST['cc2']."%' and courses.level like '%".$_POST['level2']."%'
    order by  students.StudentName ASC";
     $data2=mysqli_query($connect,$sql2);

     
while ($result2=mysqli_fetch_assoc($data2)) {
    ?>
     <tr>
                  
                          <td><?php echo $result2['studentId']; ?></td>
                         <td><?php echo $result2['StudentName']; ?> </td>
                         <td><?php echo $result2['programme']; ?></td>
                         <td><?php echo $result2['department']; ?></td>
                         <td><?php echo $result2['courseCode']; ?></td>
                         <td><?php echo $result2['courseName']; ?></td>
                        
                          <td>
                              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                              
                          </td>
                      </tr>
   <?php } }
 
 ?>
               
            </table>

            <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/javas.js"></script>
</body>
</html>
