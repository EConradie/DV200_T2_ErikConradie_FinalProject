<?php

include 'db.php' ;

//declare all fields
$id = $_POST['id'];
$name = $_POST["name"];
$surname = $_POST["surname"];
$dateofbirth = $_POST["dateofbirth"];
$gender = $_POST["gender"];
$race = $_POST["race"];
$picture = $_POST["picture"];
$role = $_POST["role"];


//update selected row
$sql = "UPDATE employees set name='$name', surname='$surname', dateofbirth='$dateofbirth', gender='$gender', race='$race', picture='$picture', role='$role' where id=$id" ;

$result = $conn->query($sql);
$conn->close();
header("location: index.php");

?>