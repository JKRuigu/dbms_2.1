<!DOCTYPE html>
<html>
  <head>
	  <title>MACHAKOS UNIVESITY</title>
	  <link href="./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>
<div class="container">
<?php include("nav.html") ?>
<br />
<br />
<br />
<table class="table table-hover table-striped">
  <tr>
     <th>#</th> 
    <th>First Name</th>
    <th>Last Name</th>
    <th>Adm No</th>
    <th>Age</th>
    <th>School</th>
    <th>Department</th>
    <th>Course</th>
    <th>Gender</th>
  </tr>
<?php
  // Create connection
  $con = mysqli_connect("localhost","maureen","","mksu");
  $num = 1;
  $sql = "SELECT * FROM student";

  $data = $con->query($sql);

  if ($data->num_rows > 0) {
    
    while($row = $data->fetch_assoc()) {
        echo "<tr><td>" . $num. "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["adm_no"]. "</td><td>" . $row["age"]. "</td><td>".$row["school"]. "</td><td>" . $row["department"]. "</td><td>" . $row["course"]. "</td><td>" . $row["gender"]. "</td></tr>";
        $num++;
    }
  } else {
      echo "0 results";
  }

  $con->close();
?>

</div>
<?php include("footer.html") ?>
</body>
</html>
