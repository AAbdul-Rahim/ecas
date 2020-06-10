<?php

//import.courses.ajax.php

include '../../vendor/autoload.php';
$connect = new PDO("mysql:host=localhost;dbname=#####", "root", "");

if($_FILES["import_excel"]["name"] != '')
{
    $allowed_extension = array('xls', 'csv', 'xlsx');
    $file_array = explode(".", $_FILES["import_excel"]["name"]);
    $file_extension = end($file_array);

    if(in_array($file_extension, $allowed_extension))
    {
        $file_name = time() . '.' . $file_extension;
        move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
        $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

        $spreadsheet = $reader->load($file_name);

        unlink($file_name);

        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $insert_data = array(
                ':code'  => $row[0],
                ':title'  => $row[1],
                ':trimester'  => $row[2],
                ':level'  => $row[3],
                ':program'  => $row[4],
                ':program_type'  => $row[5],
                ':faculty'  => $row[6]
            );

            $query = "INSERT INTO courses (code, title, trimester, level, program, program_type, faculty)
                          VALUES (:code, :title, :trimester, :level, :program, :program_type, :faculty)";

            $statement = $connect->prepare($query);
            $statement->execute($insert_data);
        }
        $message = '<div class="alert alert-success">Data Imported Successfully</div>';

    }
    else
    {
        $message = '<div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div>';
    }
}
else
{
    $message = '<div class="alert alert-danger">Please Select File</div>';
}

echo $message;

?>

