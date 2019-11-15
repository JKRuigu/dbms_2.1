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
<form action="insert.php" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" name="fname" class="form-control" placeholder="">
		</div>
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name="lname" class="form-control" placeholder=" ">
		</div>
	</div>
	<div class="form-row">
	<div class="col form-group">
		<label>Admission Number </label>   
	  	<input type="text" class="form-control"  name="adm_no" placeholder="###-####-####">
	</div>
	<div class="col form-group">
		<label>Age</label>
	  	<input type="number" class="form-control" name="age" min="17" max="50">
	</div>
	</div>
	<div class="form-group">
		<label>School</label>
	    <input name="school" class="form-control" type="text">
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Department</label>
		  <input name="department" type="text" class="form-control">
		</div> 
		<div class="form-group col-md-6">
		  <label>Course</label>
		  <select id="inputState" name="course" class="form-control">
		    <option> Choose...</option>
		      <option>Bsc IT</option>
		      <option>Bsc Computer Science</option>
		      <option selected="">Bsc Commerce</option>
		      <option>Bsc Education</option>
		      <option>Bsc Civil Engineering</option>
		  </select>
		</div>
	</div>	
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Gender</label>
		  <select id="inputState" name="gender" class="form-control">
		    <option> Choose...</option>
		      <option>Female</option>
		      <option>Male</option>
		  </select>
		</div>
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
