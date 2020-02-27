<?php
$connection = new mysqli("localhost","root","","junell");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_POST['LRN'])){


    $name = $_POST['LRN'];
    $fname = $_POST['FirstName'];
    $mname= $_POST['MiddleName'];
    $lname= $_POST['LastName'];
    $age= $_POST['Age'];
    $bdate= $_POST['BirthDate'];
    $gender= $_POST['Gender'];
    $address= $_POST['Address'];
    $grade= $_POST['Grade'];
    $section= $_POST['Section'];


    $insert = "INSERT INTO 	studentsdb (
        LRN,
        FirstName,
        MiddleName,
        LastName,
        Age,
        BirthDate,
        Gender,
        Address,
        Grade,
        Section,
        EnrolledAt ) VALUES (
        '$name',
        '$fname',
        '$mname',
        '$lname',
        '$age',
        '$bdate',
        '$gender',
        '$address',
        '$grade',
        '$section',
        NOW()) ";
    
    if ($connection->query($insert) === TRUE) {
        echo "<script>alert('Student Added baby')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    $connection->close();

}




?>

