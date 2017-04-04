<?php require("ParentClass.php"); ?>
<?php require("ChildClass.php"); ?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>Assignment 3 - Kaitlyn Carey </title>

		<link rel="stylesheet" href="assignment3.css">
		
	</head>

	<body>
	
		<header>
		
			<h1> Generate an Awesome Nickname </h1>
			<h3> Kaitlyn Carey - Assignment 3 - CS 1520 </h3>
			
		</header>
		
		<main>		

			<form name="form" id="form" action="" method="post">
				<div>
					<label for="firstName">First Name:</label>
					<input type="text" name="firstName"/>
					<br />
	           		<br />					
	          	</div>
	          	<div>
					<label for="lastName">Last Name:</label>
	           		<input type="text" name="lastName"/>
	           		<br />
	           		<br />	           		
				</div>
				<div>
	           		<label for="animal">Favorite Animal (Optional):</label>
	            	<input type="text" name="animal"/>
					<br />	   
					<br />	            	
					         	
	         	</div>
	         	<div>
	           		<input type="submit" value="submit">
					<br />	           		
	            </div>
			</form>

			<?php
			
				if ($_SERVER['REQUEST_METHOD'] == 'POST' && (empty($_POST['firstName']) || empty($_POST['lastName'])))
				{
					echo "<br> <h3> You must enter your full name. </h3>";
				}
			
				if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && empty($_POST['animal'])) 
				{
					$parent = new ParentClass ($_POST['firstName'],$_POST['lastName']);
					echo "<br> <h3>" . $parent . "</h3>";
				}
				if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['animal'])) 
				{
					$parent = new ParentClass($_POST['firstName'],$_POST['lastName']);
					$child = new ChildClass($_POST['firstName'],$_POST['lastName'], $_POST['animal']);
					echo "<br><br> <h3>" . $child . "</h3>";
				}
			 ?>

		</main>
	</body>

</html>