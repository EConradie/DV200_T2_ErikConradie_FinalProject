<?php
    include 'db.php';

    error_reporting(E_ERROR | E_PARSE);

    //select every row from employees table
    $sql = "SELECT * FROM appointments";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($row['id'] == $_GET['id']){

            //create input fields for row to be updates with information
            echo '<tr>';
            echo '<td class="emphasis"><input name="date" type="date" value="'.$row['appointment_date'].'"></td>';
            echo '<td class="emphasis"><input name="time" type="time" value="'.$row['appointment_time'].'"></td>';
            echo '<td><input name="doctor" type="text" value="'.$row['doctor_id'].'"></td>';
            echo '<td><input name="patient" type="text" value="'.$row['patient_id'].'"></td>';
            echo '<td><input name="diagnosis" type="text" value="'.$row['diagnosis'].'"></td>';
            echo '<td><input name="room" type="text" value="'.$row['room_id'].'"></td>';
            echo '<td><input name="receptionist" type="text" value="'.$row['receptionist'].'"></td>';
            echo '<td>';
            echo '<a type="submit" href="#" class="cta">Save</a>';
            echo '</td>';
            echo '<td>';
            echo '<a href="#" class="cta">Delete</a>';
            echo '</td>';
            echo '</tr>';

            
        }else{
            
            //display all information from the selected appointment
            echo '<tr>';
            echo '<td class="emphasis">'.$row['appointment_date'].'</td>';
            echo '<td class="emphasis">'.$row['appointment_time'].'</td>';
            echo '<td>'.$row['doctor_id'].'</td>';
            echo '<td>'.$row['patient_id'].'</td>';
            echo '<td>'.$row['diagnosis'].'</td>';
            echo '<td>'.$row['room_id'].'</td>';
            echo '<td>'.$row['receptionist'].'</td>';
            echo '<td>';
            echo '<a class="cta" href="appointments.php?id=' . $row['id'] . '" role="button">Update</a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="cta" href="delete_ap.php?id=' . $row['id'] . '" role="button">Delete</a>';
            echo '</td>';
            echo '';
            echo '</tr>';

        }
        
    }

    $conn->close();

?>