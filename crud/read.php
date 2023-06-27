<?php
    include 'db.php';

    error_reporting(E_ERROR | E_PARSE);

    //select every row from employees table
    $sql = "SELECT * FROM employees";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($row['id'] == $_GET['id']){

            //create input fields for row to be updates with information
            echo '<form enctype=”multipart/form-data” style class="form-inline m-2" action="update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
            echo '<td><input type="text" class="form-control" name="idnumber" value="'.$row['idnumber'].'"></td>';
            echo '<td><input type="date" class="form-control" name="dateofbirth" value="'.$row['dateofbirth'].'"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="text" class="form-control" name="race" value="'.$row['race'].'"></td>';
            echo '<td><input type="file" class="form-control" name="picture" value="'.$row['picture'].'"></td>';
            echo '<td><input type="text" class="form-control" name="role" value="'.$row['role'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';

            
        }else{
            
            //display all information from the selected employee in card format 
            echo '<td>';
            echo '<div class="card" style="width:300px;">';
            echo '<img class="card-img-top" src="..\ppf\"'.$row['picture'].'" alt="Card image">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['name'].' '.$row['surname'].'</h4>';
            echo '<p class="card-text">'.$row['idnumber'].'</p>';
            echo '<p style="float:right" class="card-text">'.$row['gender'].'</p>';
            echo '<p  class="card-text">'.$row['role'].'</p>';
            echo '<p style="float:right" class="card-text">'.$row['race'].'</p>';
            echo '<p class="card-text">'.$row['dateofbirth'].'</p>';
            echo '<a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a>';
            echo '<a style="float:right" class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a>';
            echo '</div>';
            echo '</div>';
            echo '</td>';

        }
        
    }

    $conn->close();

?>