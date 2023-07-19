<?php

include 'db.php' ;

//establish all fields into variables
$doctor = $_POST["doctor"]; 
$patient = $_POST["patient"];
$diagnosis = $_POST["diagnosis"];
$date = $_POST["date"];
$time = $_POST["time"];
$room = $_POST["room"];
$receptionist = $_POST["receptionist"];

// insert variables into table
$sql = "UPDATE INTO appointments (appointment_date, doctor_id, patient_id, diagnosis, room_id, appointment_time, receptionist_id VALUES ('$date', '$doctor', '$patient', '$diagnosis', '$room', $time', '$receptionist')" ;

$result = $conn->query($sql);
$conn->close();
header("location: appointments.php");

?>