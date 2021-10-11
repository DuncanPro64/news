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

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">
                        <!-- Single Featured Post -->

                        <div class="col-12 col-lg-7">
                                                        <?php
                $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
                        INNER JOIN category AS c
                        ON o.category_id=c.cat_id 
                        INNER JOIN comment AS d
                      ON o.article_id=d.article_id
                      INNER JOIN editor AS e
                      ON e.email=o.editor_id LIMIT 1") or die(mysqli_error($con));



while($rr=mysqli_fetch_array($row)){
    $article_id = $rr['article_id'];
    $query = "SELECT COUNT(*) FROM comment WHERE article_id = $article_id";
    $count = mysqli_query($con,$query) or die(mysqli_error($con));
    $count = mysqli_fetch_array($count);
    $count = $count[0];
    ?>

                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>" class="post-catagory"><?php echo $rr['cat_name']; ?></a>
                                    <a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>"  class="post-title">
                                        <h6><?php echo $rr['article_title']; ?></h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By  <a href="single-post.html"><?php echo $rr['f_name']; ?>  <?php echo $rr['l_name']; ?></a></p>
                                        <p class="post-excerp"><?php echo $rr['article_title']; ?></p>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span><?php echo $rr['likes']; ?></span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span><?php echo $count; ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        
       
                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            <?php
$select = mysqli_query($con, "SELECT c.cat_name, c.cat_id,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id LIMIT 2") or die(mysqli_error($con));



while($rr=mysqli_fetch_array($select)){
    
    $article_id = $rr['article_id'];
    $query = "SELECT COUNT(*) FROM comment WHERE article_id = $article_id";
    $count = mysqli_query($con,$query) or die(mysqli_error($con));
    $count = mysqli_fetch_array($count);
    $count = $count[0];
    ?>
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>" class="post-catagory"><?php echo $rr['cat_name']; ?></a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6><?php echo $rr['article_title']; ?></h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span><?php echo $rr['likes']; ?></span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span><?php echo $count ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                            <!-- Single Featured Post -->
                           
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    
                    <?php
  
$select = mysqli_query($con, "SELECT c.cat_name, c.cat_id, o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM category as c
        INNER JOIN article AS o
        ON c.cat_id=o.category_id LIMIT 6 ");



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
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        <!-- <div class="col-12 col-md-6"> -->
        <?php
$row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id
      INNER JOIN editor AS e
      ON e.email=o.editor_id LIMIT 4");



while($rr=mysqli_fetch_array($row)){
    $article_id = $rr['article_id'];
    $query = "SELECT COUNT(*) FROM comment WHERE article_id = $article_id";
    $count = mysqli_query($con,$query) or die(mysqli_error($con));
    $count = mysqli_fetch_array($count);
    $count = $count[0];
    
        echo'<div class="col-12 col-md-6">
        <div class="single-blog-post style-3">
            <div class="post-thumb">';
               echo'<a href="single-post.php?article_id='.$rr['article_id'].' ?>"><img src="img/bg-img/12.jpg" alt=""></a>';
           echo' </div>
            <div class="post-data">
                <a href="single-post.php?article_id='.$rr['article_id'].'?>" class="post-catagory">'.$rr['cat_name'].'</a>
                <a href="#" class="post-title">
                    <h6>'.$rr['article_title'].'</h6>
                </a>
                <div class="post-meta d-flex align-items-center">
                    <a href="single-post.php?article_id='.$rr['article_id'].'" class="post-like"><img src="img/core-img/like.png" alt=""> <span>'.$rr['likes'].'</span></a>
                    <a href="single-post.php?article_id='.$rr['article_id'].'" class="post-comment"><img src="img/core-img/chat.png" alt="like button" name="like_btn"> <span>'.$count.'</span></a>
                </div>
            </div>
        </div>
    
    </div>';
    }
?>
             
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 Most Popular News</h3>

                        <!-- Single Popular Blog -->
            <?php
            $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
                    INNER JOIN category AS c
                    ON o.category_id=c.cat_id 
                    INNER JOIN comment AS d
                  ON o.article_id=d.article_id
                  INNER JOIN editor AS e
                  ON e.email=o.editor_id LIMIT 6");


            $i=1;
            while($rr=mysqli_fetch_array($row)){
                ?>
                                   
                                   
                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span><?php echo $i; ?>.</span> <?php echo $rr['article_title']; ?></h6>
                        </a>
                        <p><?php echo date('F d ,Y', strtotime($rr['date'])); ?></p>
                    </div>
                    <?php $i=$i+1; ?>
            <?php } ?>
                        <!-- Single Popular Blog -->
                        

                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget">
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
</div>
</div>
</div>
</div>

    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video1.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video2.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Editor’s Pick</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        <!-- <div class="col-12 col-lg-4"> -->

<?php
$row2 = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id
      INNER JOIN editor AS e
      ON e.email=o.editor_id LIMIT 6");



while($rr=mysqli_fetch_array($row2)){
    
                           echo' 
                           <!--single post-->
                           <div class="col-12 col-lg-4">
                           <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="single-post.php?article_id='.$rr['article_id'].'"><img src="img/bg-img/1.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="single-post.php?article_id='.$rr['article_id'].'" class="post-title">
                                        <h6>'.$rr['article_title'] .'</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">'.date('F d ,Y', strtotime($rr['date'])).'</a></div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>';
                    }
                    ?>
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>World News</h6>
                    </div>

                    <!-- Single Post -->
                    <?php
$row2 = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name,o.content, o.article_title,o.date,o.time_posted,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id
      INNER JOIN editor AS e
      ON e.email=o.editor_id LIMIT 6");



while($rr=mysqli_fetch_array($row2)){
    ?>
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>" class="post-title">
                                <h6><?php echo $rr['article_title']; ?></h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#"><?php echo date('F d ,Y', strtotime($rr['date'])); ?></a></div>
                            </div>
                        </div>
                    </div>
<?php }?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->
    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

    <!-- social links section -->
    <div class="container social center-block">
        <h4>Follow us on social networks</h4>
      <div class="row">
        <div class="col-sm twitter">
          <a class="btn btn-social-icon btn-twitter">
        <span class="fa fa-twitter"></span>campusvibes
      </a>
        </div>
        <div class="col-sm">
          <a class="btn btn-social-icon btn-facebook">
        <span class="fa fa-facebook"></span>campusvibes
      </a>
        </div>
        <div class="col-sm">
          <a class="btn btn-social-icon btn-instagram">
        <span class="fa fa-instagram"></span>campusvibes
      </a>
        </div>
      </div>
</div>
    <!-- social links section end -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

       <?php include('footer.php'); ?>
    </footer>
    <?php include('donate.php'); ?>

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

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

    <script type="text/javascript">
    $(function(){
    $("#test").click(function(){
        $(".test").modal('show');
    });
    $(".test").modal({
        closable: true
    });
});
</script>
</body>

</html>