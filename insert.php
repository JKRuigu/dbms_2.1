<?php 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$course = $_POST['course'];
	$adm_no = $_POST['adm_no'];
	$department = $_POST['department'];
	$school = $_POST['school'];
	$gender = $_POST['gender'];
	
	$con = mysqli_connect("localhost","maureen","","mksu");

	$sql = "INSERT INTO student(fname,lname,adm_no,age,school,department,course,gender) 
				values('$fname','$lname','$adm_no','$age','$school ','$department','$course','$gender')";
	
	mysqli_query($con,$sql);

?>