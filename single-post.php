
<?php

include('connection.php');


//getting userid of the data from url
  
$article_id = $_GET['article_id'];
//$id = $_REQUEST['article_id'];


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

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/25.jpg" alt=""></a>
                            </div>
                            <div class="post-data">

                                <?php

                                $query = "SELECT * FROM category INNER JOIN article ON category.cat_id=article.category_id WHERE cat_id=1 ";
                                $result = mysqli_query($con,$query) or die(mysqli_error($con));
                                $row = mysqli_fetch_assoc($result) or die(mysqli_error($con));
                                echo'<a href="#" class="post-catagory">'.$row['cat_name'].'</a>
                                <a href="single-post.php" class="post-title">
                                    <h6>'.$row['article_title'].'</h6>
                                </a>';

                                $editor_id = $row['editor_id'];

                                $query2 = "SELECT * FROM article, campus INNER JOIN editor ON '$editor_id'=editor.email where article_id=$article_id";
                                $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
                                $row2 = mysqli_fetch_assoc($result2) or die(mysqli_error($con));

                                
                                echo '<div class="post-meta">
                                    <p class="post-author">By <a href="#">'.$row2['f_name'].' '.''.$row2['l_name'].'</a>'.$row2['content'].'
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">finacial,</a></li>
                                                <li><a href="#">politics,</a></li>
                                                <li><a href="#">stock market</a></li>
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img src="https://img.icons8.com/ios/35/4a90e2/good-quality--v1.png"/> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="https://img.icons8.com/windows/32/4a90e2/topic--v1.png"/> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

                    

                        echo'<!-- About Author -->
                        <div class="blog-post-author d-flex">
                            <div class="author-thumbnail">

                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <a href="#" class="author-name"> '.$row2['f_name'].' '.''.$row2['l_name'].'<img src="https://img.icons8.com/fluency/15/000000/verified-badge.png"/> </a>
                                <p style="color: blue;">'.$row2['email'].'</p><br>
                                <p>'.$row2['campus_name'].'</p>
                            </div>
                        </div>
                    

                        <div class="pager d-flex align-items-center justify-content-between">
                            <div class="prev">
                                <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                            </div>
                            <div class="next">
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>
                        <div class="row">';

                        // $query3="SELECT * FROM  "
                        // while ($row {
                   
                        $query = "SELECT * FROM category as c INNER JOIN article as a ON c.cat_id=a.category_id LIMIT 2 ";
                        $row= mysqli_query($con,$query) or die(mysqli_error($con));
                       
                         foreach ($row as $rr) {
                        $cut_string = $rr['content'];
                        $content = substr($cut_string, 0,100);    

                        echo'
                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">'.$rr['cat_name'].'</a>
                                        <a href="#" class="post-title">
                                            <h6>'.$content.'</h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="https://img.icons8.com/ios/35/4a90e2/good-quality--v1.png"/> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="https://img.icons8.com/windows/32/4a90e2/topic--v1.png"/> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                       
                            <!-- Single Post -->
                   
                        </div>
                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h5 class="title">3 Comments</h5>

                                    <ol class="children">
                                        

                                <!-- Single Comment Area -->
                                <?php
                             $query6 = "SELECT * FROM comment LIMIT 4";
                            $row = mysqli_query($con,$query6) or die(mysqli_error($con));
                            
                            while($rr=mysqli_fetch_array($row)){
   
                                ?>
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author"><?php echo $rr['commenter_name']; ?></a>
                                            <a href="#" class="post-date"><?php echo date('F d, Y', strtotime($rr['date'])); ?></a>
                                            <p><?php echo $rr['c_content']; ?></p>
                                        </div>
                                    </div>
                                     <?php }?>

                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*" required>
                                        </div>
                                        
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message*" cols="30" rows="10" placeholder="Post your comment"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <?php
  
$select = mysqli_query($con, "SELECT c.cat_name, c.cat_id, o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM category as c
        INNER JOIN article AS o
        ON c.cat_id=o.category_id LIMIT 6  ");



while($rr=mysqli_fetch_array($select)){
    ?>
                            <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>" class="post-catagory"><?php echo $rr['cat_name']; ?></a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6><?php echo $rr['article_title']; ?></h6>
                                </a>
                                <p class="post-date"><span><?php echo date('g:ia', strtotime($rr['time_posted']));?></span> | <span><?php echo date('F d Y', strtotime($rr['date'])); ?></span></p>
                            </div>
                        </div>
                    </div>
<?php } ?>
                            
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>Most Popular News</h3>



                            <!-- Single Popular Blog -->
                          <?php include('popular-news-section.php');?>


                            <!-- Single Popular Blog -->
                   
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>


                            <!-- Single Comments -->

                            <?php include('latest-comment-section.php'); ?>

                            <!-- Single Comments -->
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

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
                                <a href="index.php"><img src="img/core-img/logo.gif" alt="" ></a>
                            </div>
                            <!-- List -->
                             <ul class="list">
                                <li><a href="mailto:contact@youremail.com">customercare@campusvibes.com</a></li>
                                <li><a href="tel:+4352782883884">+254 714 757251</a></li>
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
                        
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
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