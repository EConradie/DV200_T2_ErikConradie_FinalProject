<?php

include 'db.php' ;

//establish all fields into variables
$doctor = $_POST["ap_doctor"]; 
$patient = $_POST["ap_patient"];
$diagnosis = $_POST["ap_diagnosis"];
$date = $_POST["ap_date"];
$time = $_POST["ap_time"];
$room = $_POST["ap_room"];

// insert variables into table
$sql = "INSERT INTO appointments (appointment_date, doctor_id, patient_id, diagnosis, room_id, appointment_time, receptionist_id VALUES ('$date', '$doctor', '$patient', '$diagnosis', '$room', '$appointment', '$time', '$receptionist')" ;

$conn->query($sql);
$conn->close();
header("location: appointments.php");

?>