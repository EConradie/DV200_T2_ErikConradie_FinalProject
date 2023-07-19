<?php
    include 'db.php';
    // get the id for the selected row
    $id = $_GET['id'];

    //delete selected row
    $sql = "DELETE FROM appointments WHERE id = $id";

    $conn->query($sql);
    $conn->close();
    header("location: appointments.php");
?>