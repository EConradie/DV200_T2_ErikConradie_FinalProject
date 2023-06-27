<?php

include 'db.php' ;

//establish all fields into variables
$idnumber = $_POST["idnumber"]; 
$name = $_POST["name"];
$surname = $_POST["surname"];
$dateofbirth = $_POST["dateofbirth"];
$gender = $_POST["gender"];
$race = $_POST["race"];
$picture = $_POST["picture"];
$role = $_POST["role"];

// insert variables into table
$sql = "INSERT INTO employees (idnumber, name, surname, dateofbirth, gender, race, picture, role) VALUES ('$idnumber', '$name', '$surname', '$dateofbirth', '$gender', '$race', '$picture', '$role')" ;

$conn->query($sql);
$conn->close();
header("location: index.php");

?>