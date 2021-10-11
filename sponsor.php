<?php 
include('connection.php');
 include('head-seo.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>

        <?php include('header.php'); ?>

</head>



<body>
   
<?php include('hero-area.php'); ?>
    <!-- ##### Hero Area Start ##### -->
    

    <!-- ##### About Area Start ##### -->
    <section class="about-area">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2> Welcome and here we recognize our Sponsors</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <p><span style="color: #ee002d; font-weight: bold; font-size: 20px;">“</span>If nature has made you for a giver, your hands are born open, and so is your heart; and though there may be times when your hands are empty, your heart is always full, and you can give things out of that—warm things, kind things, sweet things—help and comfort and laughter—and sometimes gay, kind laughter is the best help of all.<span style="color: #ee002d; font-size:22px;">”</span>
―                  <span style="color: #ee002d; font-size:12px;">Frances Hodgson Burnett, A Little Princess</span>     </p>
                    <p>We are pleased to acknowledge the contributions made by our beloved Sponsors.They have helped touch and put a smile on a comrade. Below is the list of our beloved sponsors. We thank the for your their kindness and willingness to give</p>
                </div>
                <div class="col-12 col-lg-6">
                    <p style="margin-left: 20%;margin-top: 1%;"><a href="#"><img src="img/core-img/contribution.png" height="30%" width="30%" alt=""></a>.</p>
                    <p>We are pleased to acknowledge the contributions made by our beloved Sponsors.They have helped touch and put a smile on a comrade. Below is the list of our beloved sponsors. We thank the for your their kindness and willingness to give</p>
                </div>
            </div>
<?php
                 $query1 = mysqli_query($con, "select count(email) as total from donation");
                 $result1= mysqli_fetch_array($query1);
                 $query2 = mysqli_query($con, "select SUM(amount) as cash from donation");
                 $result2= mysqli_fetch_array($query2); 
                 $query3 = mysqli_query($con, "select count(status) as number from project");
                 $result3= mysqli_fetch_array($query3);?>
            <div class="row align-items-center mt-80">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter"><?php echo $result2['cash']/1000;?></span>K</h3>
                        <div class="cf-text">
                            <h6>Cash Donated</h6>
                            <span>We use this money to help needy students and run student projects.</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter"> <?php echo $result1['total'];?></span></h3>
                        <div class="cf-text">
                            <h6>Sponsors</h6>
                            <span>We appreciate you all for your kindness and willingness to help</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter"><?php echo $result3['number']; ?></span></h3>
                        <div class="cf-text">
                            <h6>Completed projects</h6>
                            <span>We support talented and innovative students by sponsoring their projects and talents</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter">17</span></h3>
                        <div class="cf-text">
                            <h6>Beneficiaries</h6>
                            <span>We are geared toward nurturing talents and helping needy students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="newspaper-team mb-30">
        <div class="container">
            <div class="row">

                <!-- Single Team Member -->
                 <?php
                 $query1 = mysqli_query($con, "select count(email) as total from donation");
                 $result1= mysqli_fetch_array($query1);
  
                $select = mysqli_query($con, "SELECT * FROM donation ");



    while($rr=mysqli_fetch_array($select)){
    ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member">
                        <img src="img/bg-img/t4.jpg" alt="">
                        <div class="team-info">
                            <h5><?php echo $rr['email']; ?></h5>
                             <h5><?php echo $rr['phone']; ?></h5>
                            <h6>Senior Editor</h6>
                        </div>
                    </div>
                </div>
 <?php } ?>
             
            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/core-img/logo.gif" alt="" ></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:contact@youremail.com">contact@campusvibes.com</a></li>
                                <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                                <li><a href="http://yoursitename.com">www.campusvibes.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Politics</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Featured</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Motorsport</a></li>
                                <li><a href="#">Horseracing</a></li>
                                <li><a href="#">Equestrian</a></li>
                                <li><a href="#">Sailing</a></li>
                                <li><a href="#">Skiing</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">FAQ</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Aviation</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Traveller</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">+More</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Autos</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

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
</body>

</html>