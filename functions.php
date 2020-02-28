<?php
$connection = new mysqli("localhost","root","","junell");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_POST['LRN'])){

    $checkLRN = "SELECT * FROM studentsdb WHERE LRN == '{$_POST['LRN']}' ";
    $result = $connection->query($checkLRN);

    if(mysql_num_rows($result) > 0)
    {
        echo "<script>alert('Hey LRN already existed')</script>";
        echo "<script>window.open('add.php','_self')</script>";
    }

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
        echo "<script>window.open('admin.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    $connection->close();

}


if(isset($_POST['UserName'])){


    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Username= $_POST['UserName'];
    $Password= $_POST['Password'];

    $checkUsername = "SELECT * FROM admin WHERE Username = '$Username' ";
    $result = $connection->query($checkUsername);
    $row = mysqli_num_rows($result); 

    if( $row > 0)
    {
        echo "<script>alert('Hey username already existed')</script>";
        echo "<script>window.open('addadmin.php','_self')</script>";
    }else {

    $insert = "INSERT INTO 	admin (
        Name,
        Age,
        Username,
        Password
      ) VALUES (
        '$Name',
        '$Age',
        '$Username',
        '$Password'
        ) ";
    
    if ($connection->query($insert) === TRUE) {
        echo "<script>alert('Admin Added baby')</script>";
        echo "<script>window.open('addadmin.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    }
    $connection->close();

}




if(isset($_POST['Login'])){

    $Username= $_POST['user'];
    $Password= $_POST['Password'];

    $checkUsername = "SELECT * FROM admin WHERE Username = '$Username' AND Password = '$Password' ";
    $result = $connection->query($checkUsername);
    $row = mysqli_num_rows($result); 

    if( $row > 0)
    {
        echo "<script>alert('Login Successfully')</script>";
        echo "<script>window.open('add.php','_self')</script>";
    }else {
        echo "<script>alert('Error Login')</script>";
        echo "<script>window.open('FRONT/index.php','_self')</script>";
    }
    $connection->close();

}





?>

