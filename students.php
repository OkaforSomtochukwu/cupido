<html>
<head>
  <title> Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
   <script src="jquery-3.5.1.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<br><br>
<form method='POST' action='students_pro.php' class='bg-light'>
	<div class='row'>
		<div class='col'>
			<h1 class='text-center'><b>STUDENT DATA FORM</b></h1>
		</div>
	</div>
	<div class='row p-5 m-3' style='border: 1px solid black'>
		<div class='col-sm-6'>
			<label for='st_sname'>Student Surname:</label>
			<input type='text'placeholder='input your surname' class='form-control' name='st_sname' id='st_sname' required>
		</div>

		<div class='col-sm-6'>
			<label for='st_mname'>Student Middle Name:</label>
			<input type='text' class='form-control'placeholder='middle name' name='st_mname' id='st_mname' required>
		</div>

		<div class='col-sm-6'>
			<label for='st_fname'>Student First Name:</label>
			<input type='text' class='form-control' placeholder='First name' name='st_fname' id='st_fname' required>
		</div>

		<div class='col-sm-6'>
			<label for='address'>Address:</label>
			<input type='text' class='form-control' name='address' id='address' placeholder='input your address' required>
		</div>

		<div class='col-sm-6'>
			<label for='address'>Student Age:</label>
			<input type='number' class='form-control' name='age' id='age' placeholder='input your age' required>
		</div>
		
		<div class='col-sm-6'>
			<label for='st_class'>Class:</label>
			<input type='text' class='form-control' name='st_class' id='st_class' placeholder='Your class' required>
		</div>
		</div>

		<div class='row'>
			<div class='col-sm-6 p-4'>
				<input type='submit' class='form-control btn-primary btn-lg' name='submit' id='submit' value='Submit' style='border-radius: 20px'>
			</div>

			<div class='col-sm-6 p-4'>
				<a href='students_pro2.php' class='form-control btn-danger btn-lg' style='border-radius: 20px'>
					Display Student List
				</a>
			</div>

		</div>

</form>



</html>