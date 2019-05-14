<?php
session_start();
include('connection.php');

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="./css/home.css">

  <script src="main.js"></script>
  
</head>

<body>
  <!-- Header Begin -->
  <?php include('header.php'); ?>
  <!-- End Header -->
  <!-- begin image  rotaions  -->

  <div class="row">
    <div class="col-sm-12">
      <div class="card card-back">
        <div class="card-body">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./image/m1.jpeg" alt="Surat" class="image-slider">
              </div>
              <div class="carousel-item">
                <img src="./image/m2.jpeg" alt="Goa" class="image-slider">
              </div>
              <div class="carousel-item">
                <img src="./image/m1.jpeg" alt="Banglore" class="image-slider">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- End Image rotation  -->
  <div class="row">
    <!-- Begin side menu  for Search  -->

    <div class="col-sm-4">
      <div class="card card-cover ">
        <div class="card-body">
          <input type="text" class="text-text" name="txtstate" placeholder="State">
          <input type="text" class="text-text" name="txtexperience" placeholder="Experience">
          <button type="button" class="btn btn-primary btn-lg" style="margin-top: 20px;">Search</button>


        </div>
      </div>
    </div>

    <!-- End side menu for Search  -->
    <!-- Bigen Faculty view -->
    <div class="col-sm-8">
      <div class="card card-cover">
        <div class="card-body">
          <?php 
           $sql="select * from tbl_faculty ";
           $result=mysqli_query($conn,$sql);
           while($res=mysqli_fetch_assoc($result)){
          ?>
          <img src="./image/f1.jpeg" class="image-icon">
          <label class="fa  fa-3x" style="position: absolute;margin: 5px;">Name: <?php echo $res['facultyName'];?></label>
          <?php  
          $sqlskill="select * from tbl_skill where facultyId='".$res['facultyId']."'";
          $resultskill=mysqli_query($conn,$sqlskill);
          while($rsk=mysqli_fetch_assoc($resultskill)){
          ?>
          <label class="fa  fa-3x" style="margin: 2px;">Skill:<?php echo $rsk['skillName']?></label>
          <?php } echo "<br>";
          $sqlexp="select * from tbl_experience where facultyId='".$res['facultyId']."'";
          $resultexp=mysqli_query($conn,$sqlexp);
          while($rexp=mysqli_fetch_assoc($resultexp)){
          ?>
          <label class="fa  fa-3x" style="margin: 2px;">Experience: <?php echo "Years ".$rexp['year']." Months ".$rexp['month'];?></label>
          <?php }
             $sqldes="select * from tbl_description where facultyId='".$res['facultyId']."'";
             $resultdes=mysqli_query($conn,$sqldes);
             while($rdes=mysqli_fetch_assoc($resultdes)){
          
          ?>
          <p><?php echo $rdes['description']; ?></p>
          <label for="">Amount  Per Hour:<?php echo $res['facultyPrice']?> </label>
             <a href="booking.php?id=<?php echo $res['facultyId']?>&&price=<?php echo $res['facultyPrice'];?>"> <button class="btn btn-primary">Booking</button></a>
           <?php } } ?>
        </div>
      </div>
      <!-- <div class="card card-cover">
        <div class="card-body">
          <img src="./image/f1.jpeg" class="image-icon">
          <label class="fa  fa-3x" style="position: absolute;margin: 5px;">Name: Proff. Mohit Tejwani</label>
          <label class="fa  fa-3x" style="margin: 2px;">Skill: JAVA , PHP</label>
          <label class="fa  fa-3x" style="margin: 2px;">Experience: 2 Years 11 Months</label>
          <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.</p>
        </div>
      </div> -->
    </div>




    <!-- End Faculty View -->
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>