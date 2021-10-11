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

    <!-- ##### About Area Start ##### -->
    <section class="about-area">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 style="margin-left:30%;"> Meet our Professional Team</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <p>
                    Campus vibes is a campus media startup concerned with consolidating news and activities around campuses and other technical institutions of higher learning. We seek to identify, nurture and market talents in campuses by providing an open platform for news updates, interchange programs among campuses, mentorship and supporting needy campus students through business ventures and donations</p>
                    <p></p>
                </div>
                <div class="col-12 col-lg-6">
                    <p style="margin-left: 30%;"><img src="https://img.icons8.com/ios-filled/50/fa314a/us-news.png"/></p>
                    <p>We are commited to providing timely and quality news updates to our clients. No number campus magazine is the only copy you need to stay updated.</p>
                </div>
            </div>

            <div class="row align-items-center mt-80">
                <!-- Single Cool Fact -->
                <?php
                 $query1 = mysqli_query($con, "select count(email) as total from editor");
                 $result1= mysqli_fetch_array($query1);
                 $query2 = mysqli_query($con, "select count(article_id) as articles from article");
                 $result2= mysqli_fetch_array($query2);
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter"><?php echo $result2['articles']; ?></span>K</h3>
                        <div class="cf-text">
                            <h6>News Article</h6>
                            <span>We publish quality and more exciting news everyday</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter"><?php echo $result1['total']; ?></span></h3>
                        <div class="cf-text">
                            <h6>Reporters</h6>
                            <span>Meet our verified reporters and editors</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter">25</span></h3>
                        <div class="cf-text">
                            <h6>Awards Won</h6>
                            <span>We are champions in our field. We have achieved so much and won many awards</span>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact d-flex align-items-center">
                        <h3><span class="counter">5</span></h3>
                        <div class="cf-text">
                            <h6>Years Old</h6>
                            <span>We celebrate five years of publishing news items and supporting campus students</span>
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
<?php
               
                 $query = mysqli_query($con, "select count(email) as total from donation");
                 $result= mysqli_fetch_array($query);
  
                $select = mysqli_query($con, "SELECT * FROM editor ");



    while($rr=mysqli_fetch_array($select)){
    ?>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member">
                        <img src="img/bg-img/t1.jpg" alt="">
                        <div class="team-info">
                            <h5><?php echo $rr['f_name']; ?> <?php echo $rr['l_name']; ?></h5>
                            <h6><?php echo $rr['email']; ?>r</h6>
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