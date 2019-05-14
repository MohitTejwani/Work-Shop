<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="./css/login.css">

    <script>
        function changeclass() {

            var college = document.getElementById("btncollege");
            var Faculty = document.getElementById("btnfaculty");
            var fly = document.getElementById("id02");
            var clg = document.getElementById("id01");

            fly.style.display = "none";
            clg.style.display = "block";

            Faculty.className = "btn mb-5";
            college.className = "btn btn-primary mb-5";

        }

        function changelogin() {

            var college = document.getElementById("btncollege")
            var Faculty = document.getElementById("btnfaculty")
            var fly = document.getElementById("id02");
            var clg = document.getElementById("id01");

            fly.style.display = "block";
            clg.style.display = "none";

            Faculty.className = "btn btn-primary mb-5"
            college.className = "btn  mb-5"
        }

        function passck() {
            if (document.getElementById("pass").value != document.getElementById("cpass").value) {
                document.getElementById("error").style.display = "block";
            }
        }

        function passagain() {
            if (document.getElementById("error").style.display === "block") {
                document.getElementById("error").style.display = "none";
            }

        }
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="border-style:none;border-radius:15px">
                    <div class="card-header bg-primary">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body mt-5">
                        <div class="btn-group btn-group-lg">
                            <button type="button" id="btncollege" onclick="changeclass();" class="btn btn-primary mb-5">College</button>
                            <button type="button" id="btnfaculty" onclick="changelogin();" class="btn mb-5">Faculty</button>
                        </div>
                        <div id="id02" style="display: none">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="txtusername" class="form-control " id="" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="txtemail" class="form-control " id="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtnumber" class="form-control " id="" placeholder="Contact Number">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="txtdob" class="form-control " id="" placeholder="">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="txtpassword" class="form-control " id="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="txtcpass" class="form-control" id="cpass" onchange="passck()" onclick="passagain()" placeholder="Confirm Password">
                                    <div style="color:red;display: none" id="error"> error! Password Doesn't Match </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtqualification" class="form-control " id="" placeholder="Qulification">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="txtprice" class="form-control " id="" placeholder="Amount Per Hour">
                                </div>
                                <div class="btn-group btn-group-lg">
                                    <input type="submit" name="btnfregister" class="btn btn-primary mr-1" id="" Value="Register">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                        <div id="id01">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="txtcname" class="form-control " id="" placeholder="College Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="txtcemail" class="form-control " id="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtaddress" class="form-control " id="" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtcity" class="form-control " id="" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtstate" class="form-control " id="" placeholder="State">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtpincode" class="form-control " id="" placeholder="Pincode">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="txtpassword" class="form-control " id="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="txtcpass" class="form-control" id="cpass" onchange="passck()" onclick="passagain()" placeholder="Confirm Password">
                                    <div style="color:red;display: none" id="error"> error! Password Doesn't Match </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtcnumber" class="form-control " id="" placeholder="Contact Number">
                                </div>
                                <div class="btn-group btn-group-lg">
                                    <input type="submit" name="btncregister" class="btn btn-primary mr-1" id="" Value="Register">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</body>

</html>

<?php
if (isset($_REQUEST['btnfregister'])) {
    $pass = $_REQUEST['txtpassword'];
    $cpass = $_REQUEST['txtcpass'];
    if ($pass != $cpass) {
        echo (passck());
    } else {

        $r = md5(uniqid(rand(), true));
        $sql = "INSERT INTO `tbl_faculty`(`facultyId`, `facultyName`, `facultyEmail`, `password`, `facultyContact`, `facultyDob`, `facultyQulification`, `facultyPrice`) VALUES ('" . $r . "','" . $_REQUEST['txtusername'] . "','" . $_REQUEST['txtemail'] . "','" . $_REQUEST['txtpassword'] . "','" . $_REQUEST['txtnumber'] . "','" . $_REQUEST['txtdob'] . "','" . $_REQUEST['txtqualification'] . "','" . $_REQUEST['txtprice'] . "')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} // end fauclty Resgister isset

// Begin College Register Code 
if (isset($_REQUEST['btncregister'])) {
    $pass = $_REQUEST['txtpassword'];
    $cpass = $_REQUEST['txtcpass'];
    if ($pass != $cpass) {
        echo (passck());
    } else {

        $r = md5(uniqid(rand(), true));
        $sql = "INSERT INTO `tbl_college`(`collegeId`, `collegeName`, `address`, `city`, `state`, `pincode`, `contact`, `email`, `password`) VALUES ('" . $r . "','" . $_REQUEST['txtcname'] . "','" . $_REQUEST['txtaddress'] . "','" . $_REQUEST['txtcity'] . "','" . $_REQUEST['txtstate'] . "','" . $_REQUEST['txtpincode'] . "','" . $_REQUEST['txtcnumber'] . "','" . $_REQUEST['txtcemail'] . "','" . $_REQUEST['txtpassword'] . "')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} // end fauclty login isset



// End College  Register 
?>