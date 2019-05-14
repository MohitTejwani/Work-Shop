<?php
session_start();
include('connection.php');
// if(isset($_SESSION['sid'])){
//     echo "<script>window.location='home.php';</script>";

// }elseif(isset($_SESSION['fid'])){
//     echo "<script>window.location='home.php';</script>";

// }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!-- <link rel="stylesheet" type="text/css" href="./css/login.css"> -->
    <script>

    </script>
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
    </script>
    <style>
        .overlay-img {
            background-image: url('./image/im.jpg');
            
        }

        h1 {
            font-weight: 800;
            color: white;

        }
        .cover{
            content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.77);
    }
    </style>

</head>

<body class="overlay-img">
    <div class="cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="border-style:none;border-radius:3px">
                    <div class="card-header bg-primary">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body mt-5">
                        <div class="btn-group btn-group-lg">
                            <button type="button" id="btncollege" onclick="changeclass();" class="btn btn-primary mb-5">College</button>
                            <button type="button" id="btnfaculty" onclick="changelogin();" class="btn mb-5">Faculty</button>
                        </div>
                        <!-- Login Form For  College  -->
                        <div id="id01">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="txtcname" class="form-control " id="" placeholder="College Name">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="txtcpassword" class="form-control " id="" placeholder="Password">
                                </div>
                                <div class="btn-group btn-group-lg">
                                    <input type="submit" name="btnclogin" class="btn btn-primary mr-1" id="" Value="Login">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                        <!-- End Login Form For College -->
                        <!-- Begin Login for Faculty  -->
                        <div id="id02" style="display: none">
                            <form>
                                <div class="form-group">
                                    <input type="email" name="txtusername" class="form-control " id="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="txtpassword" class="form-control " id="" placeholder="Password">
                                </div>
                                <div class="btn-group btn-group-lg">
                                    <input type="submit" name="btnflogin" class="btn btn-primary mr-1" id="" Value="Login">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                        <div>
                        <p > <a href="#" style="color:#00000075">Registration ? </a></p>
                        </div>
                        <!-- End Login Form for Facuulty  -->
                    </div>
                </div>


            </div>
        </div>
        </div>
    </div>

</body>

</html>

<?php
// Begin College  Login
if (isset($_REQUEST['btnclogin'])) {
    $sql = "select * from tbl_college where collegeName='" . $_REQUEST['txtcname'] . "' and password='" . $_REQUEST['txtcpassword'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
            $user = $res['collegeName'];
            $pass = $res['password'];
            if ($user == $_REQUEST['txtcname'] && $pass = $_REQUEST['txtcpassword']) {
                $_SESSION['sid'] = $res['collegeId'];
                $_SESSION['collegeName'] = $res['collegeName'];
                echo "<script>window.location='home.php';</script>";
            } else {
                echo "Username & Password Does Not Match";
            }
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        This is a danger alert—check it out!
      </div>";
    }
}
// End College Login

// Begin Faculty Login
if (isset($_REQUEST['btnflogin'])) {
    $sql = "select * from tbl_faculty where facultyEmail='" . $_REQUEST['txtusername'] . "' and password='" . $_REQUEST['txtpassword'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
            $user = $res['facultyEmail'];
            $pass = $res['password'];
            if ($user == $_REQUEST['txtusername'] && $pass = $_REQUEST['txtpassword']) {
                $_SESSION['fid'] = $res['facultyId'];
                $_SESSION['facultyName'] = $res['facultyName'];
                //echo $_SESSION['fid'];
                echo "<script>window.location='./faculty/dashboad.php';</script>";
            } else {
                echo "Username & Password Does Not Match";
            }
        }
    } else {
        echo "<h1>login Fail....</h1>";
    }
}

// End Faculty Login 
?>