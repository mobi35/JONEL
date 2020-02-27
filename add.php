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


<?php include 'footer.php'; ?>