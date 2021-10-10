<?php

include('connection.php');

      $email="";
      $name="";
      $category="";
      $date="";

      $update= false;
      if(isset($_POST['subscribe'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $category=$_POST['category'];
        $date=date("Y/m/d");
        
         
        $add=mysqli_query($con,"INSERT INTO subscriber(name,email,category,date) VALUES ('$name','$email','$category','$date')") or die(mysqli_error($con));
        
    if($add==true){
        $_session['message']="article created successfully.";
      
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

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                    <?php 
                        $category_id = $_GET['category'];
                        $query = "SELECT * FROM article as a INNER JOIN editor INNER JOIN comment INNER JOIN category as c ON a.category_id = c.cat_id WHERE cat_id=$category_id LIMIT 4";
                        // $query = "SELECT * FROM category as c INNER JOIN article as a ON a.category_id = $category_id ";

                        $row = mysqli_query($con,$query) or die(mysqli_error($con));

                        while($data=mysqli_fetch_array($row)){
                            $excerp = substr($data['content'],0,100);
                            $article_id = $data['article_id'];   
                            $comments = mysqli_query($con,"SELECT COUNT(*) FROM comment WHERE article_id=$article_id") or die(mysqli_error($con));
                            $row1 = mysqli_fetch_array($comments);
                            echo'<!-- Single Featured Post -->
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/25.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="single-post.php?article_id='.$data['article_id'].'" class="post-catagory">'.$data['cat_name'].'</a>
                                <a href="single-post.php?article_id='.$data['article_id'].'" class="post-title">
                                    <h6>'.$data['article_title'].'</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">'.$data['f_name'].'</a></p>
                                    <p class="post-excerp">'.$excerp.' </p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="" class="post-like"><img src="img/core-img/like.png" alt=""> <span>'.$data['likes'].'</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>'.$row1[0].'</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>';

                        }

                        ?>


                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <?php include("other-articles-section.php"); ?>

                            <!-- Single Featured Post -->
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <?php include('popular-news-section.php');?>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="index.php" method="post">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                        <div class="form-group">
                            <!-- <label>University</label> -->
                  <select class="form-control select2" style="width: 100%;" name="category">
                    <option selected="selected">Select Category</option>';
                    <?php
                        $query = "SELECT * FROM category";
                        $result = mysqli_query($con,$query) or die(mysqli_error($con));
                        while($row =mysqli_fetch_assoc($result)){
                        echo'<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                        
                                
            <button type="submit" name='subscribe' class="btn w-100">Subscribe</button>
        </form>
                        </div>

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>

                            <!-- Single Comments -->
                            <?php include('latest-comment-section.php'); ?>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

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