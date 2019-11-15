<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$course = $_POST['course'];
	$adm_no = $_POST['adm_no'];
	$department = $_POST['department'];
	$school = $_POST['school'];
	$gender = $_POST['gender'];
	
	if(!$fname || !$lname || !$age || !$course || !$adm_no || !$department || !$school || !$gender){
		echo 'No data <a href="register_form.php">Register</a>';
	}else{
		$con = mysqli_connect("localhost","maureen","","mksu");

		$sql = "INSERT INTO student(fname,lname,adm_no,age,school,department,course,gender) 
					values('$fname','$lname','$adm_no','$age','$school ','$department','$course','$gender')";
		
		mysqli_query($con,$sql);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	  <title>MACHAKOS UNIVESITY</title>
	  <link href="./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="./css/all.css">  	
  </head>
  <body>
<?php include("nav.html") ?>
<div class="container">
<br>
<br>
<br>
<p class="text-center">Register Student</p>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<article class="card-body">
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" name="fname" class="form-control" required>
		</div>
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name="lname" class="form-control" required>
		</div>
	</div>
	<div class="form-row">
	<div class="col form-group">
		<label>Admission Number </label>   
	  	<input type="text" class="form-control"  name="adm_no" placeholder="###-####-####" required>
	</div>
	<div class="col form-group">
		<label>Age</label>
	  	<input type="number" class="form-control" name="age" min="17" max="50" required>
	</div>
	</div>
	<div class="form-group">
		<label>School</label>
	    <input name="school" class="form-control" type="text" required>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Department</label>
		  <input name="department" type="text" class="form-control" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Course</label>
		  <select id="inputState" name="course" class="form-control" required>
		    <option> Choose...</option>
		      <option>Bsc IT</option>
		      <option>Bsc Computer Science</option>
		      <option selected="">Bsc Commerce</option>
		      <option>Bsc Education</option>
		      <option>Bsc Civil Engineering</option>
		  </select>
		</div>
	</div>	
	
	<div class="form-group">
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="Male">
		  <span class="form-check-label"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="Female">
		  <span class="form-check-label"> Female</span>
		</label>
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div>                                              
</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<?php include("footer.html") ?>

</body>
</html>
