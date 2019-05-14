<?php
include('connection.php');
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- icon link -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <link rel="stylesheet" href="/Content/bootstrap-datetimepicker.css" />

    <script src="main.js"></script>
    <style>
        .card-back {
            margin: 5px;
            border-radius: 10px;
            box-shadow: 6px 6px 0px 0px rgba(193, 193, 216, 0.22);

        }

        .card-cover {
            margin: 20px;
            border-radius: 10px;
            box-shadow: 6px 6px 0px 0px rgba(193, 193, 216, 0.22);

        }

        .image-slider {
            width: 100%;
            height: 200px;
        }

        .text-text {
            width: 90%;
            height: 40px;
            border-radius: 15px;
            border-style: groove;
            padding: 20px;
            margin-top: 20px;
        }

        .image-icon {
            width: 100px;
            height: 85px;
            border-radius: 50%;
        }

        .card-head {
            background-color: #0e33f7;
            color: white;
            font-weight: 500;
        }

        label {
            font-weight: 800;
        }

        .txttime {
            width: 35%;
            height: 38px;
            border-radius: 5px;
            border-style: groove;



        }
    </style>
</head>

<body>
    <!-- header Begin -->
    <?php include('header.php'); ?>
    <!-- End Header -->

    <!-- main Body -->
    <div class="container">
        <div class="row">
            <!-- Detail box Begin  -->
            <div class="col-sm-6">
                <div class="card card-cover text-center">
                    <div class="card-header card-head">
                        <h1>Faculty Detail</h1>
                    </div>
                    <img class="card-img-top" src="./image/f1.jpeg" alt="Card image cap">
                    <div class="card-body ">
                        <label>Name : </label>
                        <label>Proff Mohit Tejwani</label><br />
                        <label>Skills : </label>
                        <label> PHP,Java,Python</label> <br />
                        <label>Qualification :</label>
                        <label>MCA ,PHD</label><br />
                        <label>Experience :</label>
                        <label>2 Years 11 Month</label><br />
                        <label> Status :</label>
                        <label>Not Booked</label>
                    </div>
                </div>
            </div>


            <!-- end  Detail box  -->

            <!-- Begin booking Box -->

            <!--  -->
        </div>
    </div>
    </div>
    </div>

    <!-- End Booking Box -->
    </div>
    </div>

    <!-- End Main Body  -->
</body>

</html>
<script>
    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#startDate').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: today,
        maxDate: function() {
            return $('#endDate').val();
        }
    });
    $('#endDate').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: function() {
            return $('#startDate').val();
        }
    });

    $('#input_starttime').pickatime({});
</script>