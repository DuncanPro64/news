<?php
include('connection.php');
  $email="";
  $name="";
  $subject="";
  $message="";
  $date="";

  $update= false;
  if(isset($_POST['send'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $subject=$_POST['subject'];
     $message=$_POST['message'];
    $date=date("Y/m/d");
    
     
    $add=mysqli_query($con,"INSERT INTO messages(m_subject,sender_mail,message,date) VALUES ('$subject','$email','$message','$date')") or die(mysqli_error($con));
    
if($add==true){
    $_session['message']="message inserted successfully";
  
      }
      else{
        echo "failed";
      }     
    
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include('head-seo.php'); ?>
</head>

<body>
   <!-- ##### Header Area Start ##### -->
   <?php  include('header.php');    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php include('hero-area.php'); ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-area">
                        <form action="contact.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit" name="send">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Address:</h6>
                        <!-- <p>481 Creekside Lane Avila <br>Beach, CA 93424</p> -->
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Phone:</h6>
                        <p>+254 769869 064 <br>+254 714 757251</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Email:</h6>
                        <p>customercare@campusvibes.com</p>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <!-- <div class="map-area">
                <div id="googleMap"></div>
            </div> -->

        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <?php include('footer.php'); ?>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <?php include('donate.php'); ?>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>