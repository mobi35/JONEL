<?php include 'header.php'; ?>


    
    <a class="btn btn-primary" href="add.php">Add Student</a><br>

    <table class="table" id="myTable">
        <thead>
        <tr>
        
         <td>LRN</td>
         <td>Student Name</td>
         <td>Grade</td>
         <td>Section</td>
         <td>Enrolled at</td>
         </tr>
        </thead>

        <tbody>
     <?php
$connection = new mysqli("localhost","root","","junell");

$sql = "SELECT * FROM studentsdb ORDER BY StudentID DESC ";

$result = $connection->query($sql);

while($row = $result->fetch_assoc()){

echo "<tr> <td> ". $row["LRN"] . "</td> <td> ". $row["FirstName"] . " ". $row["MiddleName"] . " ". $row["LastName"] . "</td> <td> ".$row["Grade"]."</td>  <td>".$row["Section"]." </td>  <td>".$row["EnrolledAt"]." </td> </tr>";
    
}

    ?>
        </tbody>
    </table>


<?php include 'footer.php'; ?>