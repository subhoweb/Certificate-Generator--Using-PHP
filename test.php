<?php
include "config.php";
    if(isset($_POST['sub']))
 {
     $name    =  $_POST['name'];
     $year    =  $_POST['year'];
     
    $sql="select * from `dreamparti` where `name`='".$name."' ";
   
    $res=mysqli_query($connect,$sql);
    $count=mysqli_num_rows($res);
   

    if($count>0){

    header('content-type:image/jpeg');
    $font=realpath('fonts/vivaldi.ttf');
    $font1=realpath('fonts/Arial.ttf');
    $image=imagecreatefromjpeg("images/certi7.JPG");
    $Color = imagecolorallocate($image,51, 51, 102);

    $name        =  $_POST['name'];
    imagettftext($image,26, 0, 480, 300, $Color, $font, $name);
    $year    =  $_POST['year'];
    imagettftext($image,18, 0, 410, 350, $Color, $font1, $year);
  
    imagejpeg($image);
   
   }else{
    echo"No database found";
   }

   }

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print E Certificate</title>
  <meta charset="utf-8">
  <meta name="viewreport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card" style="margin-top:15%">
          <div class="card-header bg-success">
            <h3 class="text-center text-white">Print Prospective Participation Certificate</h3>
            <center><a style="font-size: 15px; color:white;"> DREAM@JISCE</a><center>
          </div>
          <div class="card-body">
            <form id="form" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label style="color:black;">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
               
                <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Name Title">
              </div>
              <div class="form-group">
                <label>Department & College</label>
                
                <input type="text" name="year" autocomplete="off" class="form-control" placeholder="EE Department JISCE">
              </div>
              <div class="form-group">
                <input type="submit" value="Get Certificate" name="sub" class="btn btn-primary">
                <center><p>
                    
                    Designed by <i class="icon-heart text-danger" aria-hidden="true"></i><a href="http://prithwijit.devacharya.in/exileextechnologies/"> Exileex Technologies </a> &copy <script>document.write(new Date().getFullYear());</script>
                   
                    </p></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</body>
</html>