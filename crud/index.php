<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div  style="background-color:lightgray; border-radius:100px; margin-top:25px; height:450px;" class="container">

  <h1 style="text-align:center"> Welcome</h1>
  <h4 style="text-align:center"> Add your Profile below! </h4>

  <!-- create form with fields to input new information !-->
  <form enctype=”multipart/form-data” action="create.php" method="POST">

    <div style='float:left; margin-left:75px' class='form-group'> 

    <label for="name">Name:</label>
    <input type="text" class="form-control " id="name" name="name">
    <label for="surname">Surname:</label>
    <input type="text" class="form-control " id="surname" name="surname">
    <label for="idnumber">ID number:</label>
    <input type="number" class="form-control" id="idnumber" name="idnumber">
    <label for="dateofbirth">dateofbirth:</label>
    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">

    </div>

    <div style='float:right; margin-right:75px' class='form-group'>

    <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" name="gender">
    <label for="race">race:</label>
    <input type="text" class="form-control" id="race" name="race">
    <label for="picture">Picture:</label>
    <input type="file" id="picture" name="picture">
    <br>
    <label for="role">role:</label>
    <input type="text" class="form-control" id="role" name="role">
    <br>
    <button type="submit" class="btn btn-primary">Add</button>

    </div>
    
  </form>

  <!-- display code from read.php file !-->
  <table style="display: inline-block;" class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>
    

 

</div>




</body>
</html>