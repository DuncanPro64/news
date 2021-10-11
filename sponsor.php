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
                    <p style="margin-left: 20%;margin-top: 1%;"><a href="#"><img src="https://img.icons8.com/wired/70/fa314a/donate.png"/></a>.</p>
                    <p>We are pleased to acknowledge the contributions made by our beloved Sponsors.They have helped touch and put a smile on a comrade. Below is the list of our sponsors. We thank the for your their kindness and willingness to give</p>
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
                            <span>We are geared towards nurturing talents and helping needy students</span>
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
        <?php include('footer.php'); ?>
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