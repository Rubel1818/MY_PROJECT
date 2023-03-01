
<?php
// Include the Person class file
require_once 'final.php';

// Check if the form data has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Retrieve the name and email from the form using $_POST
  $fname = $_POST['first-name'];
  $lname = $_POST['last-name'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];

  // Create a new instance of the Person class
  $person = new Person();

  // Set the properties of the person object
  $person->setFname($fname);
  $person->setLname($lname);
  $person->setAge($age);
  $person->setSex($sex);
  $person->setWeight($weight);
  $person->setHeight($height);
  //echo $person->getFname($fname);
}
?>
<html>
<head>
	<title>Person Info</title>
	<style>
		table {
			border-collapse: collapse;
			width: 50%;
		}
		td, th {
			border: 1px solid black;
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #dddddd;
		}
	</style>
</head>
<body>
	<h1>Person Information</h1>
	<table>
		<tr>
			<th>fname</th>
			<td><?php echo $person->getFname($fname); ?></td>
		</tr>
		<tr>
			<th>lname</th>
			<td><?php echo $person->getLname($lname); ?></td>
		</tr>
		<tr>
			<th>age</th>
			<td><?php echo $person->getAge($age); ?></td>
		</tr>
		<tr>
			<th>sex</th>
			<td><?php echo $person->getSex($sex); ?></td>
		</tr>
		<tr>
			<th>weight</th>
			<td><?php echo $person->getWeight($weight); ?></td>
		</tr>
		<tr>
			<th>height</th>
			<td><?php echo $person->getHeight($height); ?></td>
		</tr>
	</table>
</body>
</html>
