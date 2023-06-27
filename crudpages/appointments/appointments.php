<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="..\assets\css\style.css">
    <script src="assets\js\main.js"></script>

</head>

<body>

    <!--HEADER-->

    <header>
        <a class="logo"><img src="..\assets\logo\logo.svg" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="../pages/landing_page.html">Home</a></li>
                <li><a href="../pages/doctor_page.html">Doctors</a></li>
                <li><a href="../pages/patient_page.html">Patients</a></li>
            </ul>
        </nav>
        <a class="cta" href="../pages/signup_page.html">Login / Signup</a>
    </header>

    <!--HEADER-->

    <!--CONTENT-->

    <!--HERO-->
    <div class="hero-image">
        <div class="hero-text">
            <h1>AppointBookr</h1>
            <p>Let's Get Booking</p>
            <button style="width:200px;" class="cta">Book Now</button>
        </div>
    </div>
    <!--HERO-->

    <!--APPOINTMENTS-->




    <!--APPOINTMENTS-->

    
    <!-- create form with fields to input new information !-->
    <form enctype=”multipart/form-data” action="create.php" method="POST">

        <div style="background-image: url('../assets/images/frame.png');" id="add_appointment">

            <div id="su_titles">
                <h4>START BOOKING NOW</h4>
                <h1 class="su_h1">Add an Appointment</h1>
    
                <div class="su_inputs"> 
    
                    <div style="float: left;" class='full-input'><label for='doctor'>Doctor</label>
                        <input type='text' id='ap_doctor' name='doctor'></input>
                    </div>
    
                    <div style="float: right;" class='full-input'><label for='patient'>Patient</label>
                        <input type='text' id='ap_patient' name='patient'></input>
                    </div>

                    <div style="float: left;" class='full-input'><label for='date'>Date</label>
                        <input type='date' id='ap_date' name='date'></input>
                    </div>
    
                    <div style="float: right;" class='full-input'><label for='time'>Time</label>
                        <input type='time' id='ap_time' name='time'></input>
                    </div>
    
                    <div style="float: left;" class='full-input'><label for='diagnosis'>Diagnosis</label>
                        <input type='text' id='ap_diagnosis' name='diagnosis'></input>
                    </div>
    
                    <div style="float: right;" class='full-input'><label for='room'>Room</label>
                        <input type='number' id='ap_room' name='room'></input>
                    </div>
    
    
                    <div><button type="submit" class="su_button">Add Appointment</button></div>
    
    
                </div>
    
            </div>
    
        </div>



    </form>

    <h1 style="margin-left: 10%; margin-top: 2%;margin-bottom: 2%;">Upcoming Appointments</h1>

     <!-- display code from read.php file !-->
    <table>

        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Doctor</th>
            <th>Patient</th>
            <th>Diagnosis</th>
            <th>Room</th>
            <th>Receptionist</th>
            <th></th>
            <th></th>
        </tr>

        <tr>
            <td class="emphasis">June 14, 2023</td>
            <td class="emphasis">10:00 AM</td>
            <td>Dr. John Smith</td>
            <td>John Doe</td>
            <td>Headache</td>
            <td>123</td>
            <td>Jane Smith</td>
            <td>
                <a href="#" class="cta">Update</a>
            </td>
            <td>
                <a href="#" class="cta">Delete</a>
            </td>

        </tr>

        <!--INPUT ROW-->
        <tr>
            <td class="emphasis"><input name="date" type="date" value="June 14, 2023"></td>
            <td class="emphasis"><input name="time" type="time" value="10:00 AM"></td>
            <td><input name="doctor" type="text" value="Dr. John Smith"></td>
            <td><input name="patient" type="text" value="John Doe"></td>
            <td><input name="diagnosis" type="text" value="Headache"></td>
            <td><input name="room" type="text" value="123"></td>
            <td><input name="receptionist" type="text" value="Jane Smith"></td>
            <td>
                <a href="#" class="cta">Save</a>
            </td>
            <td>
                <a href="#" class="cta">Delete</a>
            </td>
        </tr>

        <!-- Add more rows for additional appointments -->
    </table>
</body>

<!--CONTENT-->


<!--FOOTER-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Schedules</h4>
                <ul>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Book Now</a></li>
                    <li><a href="#">Cancel</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--FOOTER-->

</body>

</html>