<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
    	<img id="img2" src="../images/trainingicon.png" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%; margin-top: 20vh;">
    </div>
    <img src="../images/training.png" id="img1">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 140px; margin-left: -10px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 100px;">Add Training Courses</h1> <br>
    	<form action="php/addtraining.inc.php" method="POST">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        	<div class="form-group col-md-12">
			          <label for="cid">Course Name</label>
			          <input type="text" class="form-control" id="cid" name="course" style="width: 270px;" placeholder="Course Name">
			        </div>
			        <div class="form-group col-md-12">
			          <label for="cname">Lecturer Name</label>
			          <input type="text" class="form-control" id="cname" name="lecturer" placeholder="Lecturer Name">
			        </div>
		    
		        <div class="form-group col-md-12">
		        	<button type="submit" class="btn" name="add" style="width: 150px; color: white;
									font-weight: bold; background: linear-gradient(to left, #6C63FF, #3F3D56);">Add Course</button>
		        </div>
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'includes/footer.php' ?>
		<script>
			var a = document.getElementById("telephone").value;
			function f() {
					if (a.length > 10) {
						alert("Numbers must be equal to 10 digits");
					}	
			}
		</script>
</body>
</html>