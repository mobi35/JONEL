<?php include 'header.php'; ?>

<div class="container">
<form action="functions.php" id="form" method="post" >

  <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" name="UserName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="pass1" placeholder="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cPassword" class="form-control" id="pass2" placeholder="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
    <input type="text" name="Name" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" name="Age" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script>

document.getElementById('form').onsubmit = function () {
var pass1 = document.getElementById('pass1').value;
var pass2 = document.getElementById('pass2').value;
if(pass1 != pass2){
  alert("password don't match baby!!");
return false;



}



};

</script>



<script src="jquery.min.js"></script>

    <div clas="container" > 
<div class="row"> 
<div class = "col-md-12"> 
 

    <table class="table" id="myTable">
        <thead>
        <tr>
        
         <td>Name</td>
         <td>Username</td>
      
         </tr>
        </thead>

        <tbody>
     <?php
$connection = new mysqli("localhost","root","","junell");

$sql = "SELECT * FROM admin ";

$result = $connection->query($sql);

while($row = $result->fetch_assoc()){

echo "<tr> <td> ". $row["Name"] . "</td> <td> ". $row["Username"] . " </td> </tr>";
    
}

    ?>
        </tbody>
    </table>

    </div>
    </div>  </div>

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