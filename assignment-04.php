<!DOCTYPE HTML>
<html>
	<head>
	</head>

<body>
	<!--CREATE part-->
	<!--affects myphp database -->
	<h1>Create Method</h1><br>
	<form method="post">
		Title: <input type="text" name="title"><br> <!--methods of submitting from w3schools -->
		First Name: <input type="text" name="name1"><br> 
		Surname: <input type="text" name="name2"><br> 
		Mobile Number: <input type="text" name="num"><br> 
		Email Address: <input type="text" name="eadd"><br> 
		Address Line 1: <input type="text" name="add1"><br> 
		Address Line 2: <input type="text" name="add2"><br> 
		Town: <input type="text" name="town"><br> 
		County: <input type="text" name="county"><br> 
		Eircode: <input type="text" name="eir"><br> 
		<input type="submit" value="submit" name="submit"> 
	</form>

	<?php
		function C(){ // code used to make create method, code refernced from youtube/w3schools/
			$servername = "webcourse.cs.nuim.ie"; //name of server
			$username = "u220088"; //username, college given
			$password = "eepohng6joo6Eish"; //password, given by college
			$dbname = "cs230_u220088"; // college given

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			//variable names
			$tit = $_POST['title']; 
			$name1 = $_POST['name1']; 
			$name2 = $_POST['name2']; 
			$num = $_POST['num']; 
			$eadd = $_POST['eadd']; 
			$add1 = $_POST['add1']; 
			$add2 = $_POST['add2']; 
			$town = $_POST['town']; 
			$county = $_POST['county']; 
			$eir = $_POST['eir']; 

			// inputs and stores sql code to myphp database
			$sql = "INSERT INTO assignment4 (Title, Fname, Lname, Mobile, EAdd, Add1, Add2, Town, County, Eircode)
			VALUES ('$tit', '$name1', '$name2', '$num', '$eadd', '$add1', '$add2', '$town', '$county', '$eir')";

			// if successful, message prints out
			if (mysqli_query($conn, $sql)) {
				echo "User data added to database!";
			}
			//else message appears 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		if (isset($_POST['submit'])) {
			C();
		}
	?>

	<!--RETRIEVE: method to recieve code-->
	<!--affects myphp database code mainly from used w3schools and youtube to store data into the table -->
	<h1>Retrieve</h1><br>
	<?php
		function R(){
			$servername = "webcourse.cs.nuim.ie"; //name of server
			$username = "u220088"; //username, college given
			$password = "eepohng6joo6Eish"; //password, given by college
			$dbname = "cs230_u220088"; // college given

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM assignment4"; //sends sql message tp database to print out table
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// putting info in table, found method from youtube and w3schools
				echo "<table id = 'table'><tr><th>ID</th><th>Title</th><th>Name</th><th>Surname</th><th>Mobile</th><th>Email</th><th>Address1</th><th>Address2</th><th>Town</th><th>County</th><th>Eircode</th></tr>";
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["id"]."</td><td>".$row["Title"]."</td><td>".$row["Fname"]."</td><td>".''.$row["Lname"]."</td><td>".'+353'.$row["Mobile"]."</td><td>".$row["EAdd"]."</td><td>".$row["Add1"]."</td><td>".''.$row["Add2"]."</td><td>".$row["Town"]."</td><td>".$row["County"]."</td><td>".$row["Eircode"]."</td></tr>";
					
					//tried to add extra table, didnt give expected results
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$conn->close();
		}
		R();

	?>

	<!--UPDATE: used to update the tables-->
	<!--affects myphp database -->
	<h1>Update</h1><br>
	<form method="post">
		Name of column: <input type="text" name="name"><br> <!--method of submitting found on w3schools -->
		New Input: <input type="text" name="new"><br> <!--method of submitting found on w3schools -->
		Id of row: <input type="text" name="id"><br> <!--method of submitting found on w3schools -->
		<input type="submit" value="submit" name="submit3"> <!--method of submitting found on w3schools -->
	</form>

	<?php
		function U(){
			$servername = "webcourse.cs.nuim.ie"; //name of server
			$username = "u220088"; //username, college given
			$password = "eepohng6joo6Eish"; //password, given by college
			$dbname = "cs230_u220088"; // college given
			$new = $_POST['new'];
			$na = $_POST['name'];
			$id = $_POST['id'];
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			//sends sql command to update database to database
			$sql = "UPDATE assignment4 SET $na='$new' WHERE id=$id";
			
			//confirmation message
			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully";
			} 
			//failure message
			else {
				echo "Error updating record: " . $conn->error;
			}

			$conn->close();
		}
		//print out altered result - code from youtube/w3schools
		if (isset($_POST['submit3'])) {
			U();
			echo "<br>your new table:<br>";
			R();
			
		}
	?>

	<!--Delete-->
	<!--affects myphp database -->
	<h1>Delete</h1><br>
	<form method="post">
		ID: <input type="text" name="id"><br>
		<input type="submit" value="Delete" name="submit2">
	</form>

	<?php
		function D(){
			$servername = "webcourse.cs.nuim.ie"; //name of server
			$username = "u220088"; //username, college given
			$password = "eepohng6joo6Eish"; //password, given by college
			$dbname = "cs230_u220088"; // college given

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$id=$_POST['id'];

			// sql to delete a record sent to database
			$sql = "DELETE FROM assignment4 WHERE id=$id";

			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		}

		//print out new altered table - code from on youtube/w3schools
		if (isset($_POST['submit2'])) {
			D();
			echo "<br>your new table:<br>";
			R();
			
		}

	?>

	<style>
		#table th { /*heading design*/
			border: 3px solid black;
			font-family: monospace;
			background-color:lightgrey;
			font-size: 14px;
			padding: 10px 5px;
			overflow: hidden;
			word-break: normal;
		}

		#table { /*border design*/
			width:auto;
			background: blue;
			height:auto;
			border-bottom: 2px solid black;
			border-collapse: collapse;
			border-spacing: 0;
		}
		
		#table td { /*cell design*/
			background: lightblue;
			text-align:left;
			font-family: sans-serif;
			font-size: 14px;
			padding: 10px 5px;
			overflow: hidden;
			word-break: normal;
			border: 3px solid black;
			min-width: 94px;
			min-height: 16px
		}

	</style>
</body>
</html>