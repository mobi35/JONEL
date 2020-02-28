<?php include 'header.php'; ?>

<div class="container">
<form action="functions.php" method="post" >

  <div class="form-group">
    <label for="exampleInputEmail1">LRN</label>
    <input type="text" name="LRN" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" name="FirstName" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Middle Name</label>
    <input type="text" name="MiddleName" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" name="LastName" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" name="Age" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Birth Date</label>
    <input type="date" name="BirthDate" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="Address" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label><br>       
        Male&nbsp;&nbsp; <input name="Gender" value="Male" type = "radio"/>  Female &nbsp;&nbsp;<input value="Female" name="Gender" type = "radio"/>
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Grade</label><br>       
       <select class="form-control" name="Grade">
        <option value="Nursery">Nursery</option>
        <option value="Preparatory">Preparatory</option>
        <option value="Grade 1">Grade 1</option>
        <option value="Grade 2">Grade 2</option>
        <option value="Grade 3">Grade 3</option>
        <option value="Grade 4">Grade 4</option>
        <option value="Grade 5">Grade 5</option>

        <option value="Grade 6">Grade 6</option>
        <option value="Grade 7">Grade 7</option>
        <option value="Grade 8">Grade 8</option>
        <option value="Grade 9">Grade 9</option>
        <option value="Grade 10">Grade 10</option>
        <option value="Grade 11">Grade 11</option>
        <option value="Grade 12">Grade 12</option>
       </select>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Grade</label><br>       
       <select class="form-control" name="Section">
        <option value = "St. Andrew">St. Andrew</option>
        <option value = "St. Bhing">St. Bhing</option>
       </select>
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



<script src="jquery.min.js"></script>

    <div clas="container" > 
<div class="row"> 
<div class = "col-md-12"> 
 

    <table class="table" id="myTable">
        <thead>
        <tr>
        
         <td>LRN</td>
         <td>Student Name</td>
         <td>Grade</td>
         <td>Section</td>
         <td>Enrolled at</td>
         <td>Action</td>
         </tr>
        </thead>

        <tbody>



        
     <?php
$connection = new mysqli("localhost","root","","junell");

$sql = "SELECT * FROM studentsdb ORDER BY StudentID DESC ";

$result = $connection->query($sql);

while($row = $result->fetch_assoc()){

echo "<tr> <td> ". $row["LRN"] . "</td> <td> ". $row["FirstName"] . " ". $row["MiddleName"] . " ". $row["LastName"] . "</td> <td> ".$row["Grade"]."</td>  <td>".$row["Section"]." </td>  <td>".$row["EnrolledAt"]." </td> <td>   <button type='button' class='btn btn-primary' data-toggle='modal' onclick='Edit(".$row["StudentID"].")' data-target='#exampleModal'>Edit </button>   </td> </tr>";
    
}

    ?>
        </tbody>
    </table>

    </div>
    </div>  </div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form>

          <div class="form-group">
        <label for="exampleInputPassword1">First Name</label>
        <input type="text" name="uFirstName" class="form-control" id="a1" placeholder="">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Middle Name</label>
        <input type="text" name="uMiddleName" class="form-control" id="a2" placeholder="">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Last Name</label>
        <input type="text" name="uLastName" class="form-control" id="a3" placeholder="">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Age</label>
        <input type="text" name="uAge" class="form-control" id="a4" placeholder="">
        </div>

    
        <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" name="uAddress" class="form-control" id="a5" placeholder="">
        </div>


        <div class="form-group">
        <label for="exampleInputPassword1">Grade</label><br>       
            <select class="form-control" id="a6" name="uGrade">
            <option value="Nursery">Nursery</option>
            <option value="Preparatory">Preparatory</option>
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>

            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
            </select>
        </div>


        <div class="form-group">
        <label for="exampleInputPassword1">Grade</label><br>       
            <select class="form-control" id="a7" name="uSection">
            <option value = "St. Andrew">St. Andrew</option>
            <option value = "St. Bhing">St. Bhing</option>
            </select>
        </div>

     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>











    <script>

function ClearSelect() {


    $('#first').removeClass('btn-primary');
    $('#second').removeClass('btn-primary');
    $('#third').removeClass('btn-primary');
    $('#fourth').removeClass('btn-primary');


     $('#first').addClass('btn-secondary');
    $('#second').addClass('btn-secondary');
    $('#third').addClass('btn-secondary');
    $('#fourth').addClass('btn-secondary');

}






$(document).ready(function () {


   
   var table = $('#myTable').DataTable({

        responsive: true,
        "scrollCollapse": true,
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'print',

                customize: function (win) {
                    $(win.document.body)
                        .css({ 'font-size': '10pt' })
                        .prepend(
                            '<img style= src="~/Images/activefinancelogo.png"  style="position:absolute; height:500px; z-index:5000; width:500px; top:0; left:0;" />'
                        );

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            }, 'excelHtml5', {
                extend: 'pdf',
                download: 'open',
            }
        ]

   });


});




function Edit(id){

$.ajax({


url:'functions.php?GetStudent',
type:'GET',
data: {id:id},
success:function(e){
alert(e);
}


});

return false;
}

</script>



<script src="DataTables-1.10.18/js/jquery.dataTables.js"></script>
<script src="DataTables-1.10.18/js/dataTables.buttons.min.js"></script>
<script src="DataTables-1.10.18/js/buttons.print.min.js"></script>

<script src="DataTables-1.10.18/js/pdfmake.min.js"></script>
<script src="DataTables-1.10.18/js/vfs_fonts.js"></script>
<script src="DataTables-1.10.18/js/buttons.html5.min.js"></script>
<script src="DataTables-1.10.18/js/jszip.min.js"></script>
<script src="DataTables-1.10.18/js/dataTables.responsive.min.js"></script>
<script src="DataTables-1.10.18/js/responsive.bootstrap4.min.js"></script>

<link href="DataTables-1.10.18/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="DataTables-1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="DataTables-1.10.18/css/button.css" rel="stylesheet" />
<script src="DataTables-1.10.18/js/dataTables.bootstrap4.js"></script>



<?php include 'footer.php'; ?>