    <?php

    include('connection.php');
        $db = mysqli_connect('localhost', 'root', '', 'vibes');

        

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
            
             
            $add=mysqli_query($db,"INSERT INTO subscriber(name,email,category,date) VALUES ('$name','$email','$category','$date')") or die(mysqli_error($db));
            
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
        <meta name="description" 
        content="Campus Vibes | Identify, nurture and market talents in tertiary institutions | Identify, nurture and market talents in tertiary institutions.">
        <title>Campus Vibes | Identify, nurture and market talents in tertiary institutions | Identify, nurture and market talents in tertiary institutions.</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="icon" href="img/core-img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/themes.css">
         <link rel="stylesheet" href="style.css">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="img/core-img/logo.gif" alt="" width="310px"></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                    <a href="admin/login.php">Login</a>
                                    <a href="admin/register.html">Register as an Editor</a>
                                </div>
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="index.php" method="post">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo logo1">
                            <a href="index.html"><img src="img/core-img/logo.gif" alt="" width="610px"></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                     <?php
                                    echo'<li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#">Categories</a>
                                        <ul class="dropdown">';
                                            
                                            $query = 'SELECT * FROM category';
                                            $result = mysqli_query($db,$query)or die(mysqli_error($con));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                           
                                              echo'   

                                              <li><a href="single-post.php?category='.htmlentities($row['cat_id']).'">'.$row['cat_name'].'</a></li>';
                                                 }
                                                    
                                                echo'
                                            </li>';
                                            ?>
                                        </ul>
                                    </li>
                                    
                                    <!-- <li><a href="#">Breaking News</a></li> -->
                                    <li><a href="single-post.html">Campus Gossip</a></li>
                                    <li><a href="single-post.html">Politics</a></li>
                                    <li><a href="single-post.html">Fashion</a></li>
                                    <li><a href="single-post.html">Entertainment</a></li>
                                    <li><a href="single-post.html">Sports</a></li>
                                    <li><a href="single-post.html">Business</a></li>
                                    <li><a href="single-post.html">Science & Technology</a></li>
                                    <li><a href="single-post.html">Health & Lifestyle</a></li>
                                    <li><a href="#">More</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title" style="font-weight: bold;">HITS OF THE WEEK</li>
                                                <li><a href="#">Top Editor</a></li>
                                                <li><a href="#">Top Photographer</a></li>
                                                <li><a href="#">Photo of the week</a></li>
                                                <li><a href="#">Article of the week</a></li>
                                                
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title"  style="font-weight: bold;">THE MAGAZINE</li>
                                                <li><a href="#">Read Online</a></li>
                                                <li><a href="#">Download for free</a></li>
                                                <li><a href="#">View Summaries</a></li>
                                                <li><a href="#">Editors</a></li>
                                            </ul>
                                               <ul class="single-mega cn-col-4">
                                                <li class="title"  style="font-weight: bold;">DONATIONS</li>
                                                <li><a href="#">Learn How</a></li>
                                                <li><a href="#"> Sponsors</a></li>
                                                <li><a href="contact.html"> Projects</a></li>
                                                <li><a href="#">Donate</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="single-post.html" class="post-catagory">Travel</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="single-post.html" class="post-catagory">Politics</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li><a href="#">Travel</a></li> -->
                                    <!-- <li><a href="contact.html">Contact</a></li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php
            $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
                    INNER JOIN category AS c
                    ON o.category_id=c.cat_id 
                    INNER JOIN comment AS d
                  ON o.article_id=d.article_id
                  INNER JOIN editor AS e
                  ON e.email=o.editor_id ") or die(mysqli_error($con));




while($rr=mysqli_fetch_array($row)){
    ?>
                                <li><a href="single-post.php"><?php echo $rr['article_title']; ?></a></li>


                            <?php }?>
                                
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>World News</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                                            <?php
                $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
                        INNER JOIN category AS c
                        ON o.category_id=c.cat_id 
                        INNER JOIN comment AS d
                      ON o.article_id=d.article_id
                      INNER JOIN editor AS e
                      ON e.email=o.editor_id ") or die(mysqli_error($con));



                while($rr=mysqli_fetch_array($row)){
                    ?>
                                <li><a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>"><?php echo $rr['article_title']; ?></a></li>
                            <?php }?>
                                <li><a href="single-post.html">Computer scients have finally solved the long standing travelling sales man problem</a></li>
                                <li><a href="single-post.html">Microsoft looses billions of money after computer hackers take  down machines and servers operating on windows ten </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
                        INNER JOIN category AS c
                        ON o.category_id=c.cat_id 
                        INNER JOIN comment AS d
                      ON o.article_id=d.article_id
                      INNER JOIN editor AS e
                      ON e.email=o.editor_id LIMIT 1") or die(mysqli_error($con));



while($rr=mysqli_fetch_array($row)){
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
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span><?php echo $rr['count']; ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        
       
                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            <?php
$select = mysqli_query($db, "SELECT c.cat_name, c.cat_id, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id LIMIT 2") or die(mysqli_error($con));



while($rr=mysqli_fetch_array($select)){
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
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span><?php echo $rr['count']; ?></span></a>
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
  
$select = mysqli_query($db, "SELECT c.cat_name, c.cat_id, o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM category as c
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
                                <p class="post-date"><span><?php echo date('g:ia', strtotime($rr['timestamp']));?></span> | <span><?php echo date('F d Y', strtotime($rr['date'])); ?></span></p>
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
$row = mysqli_query($db, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
        INNER JOIN category AS c
        ON o.category_id=c.cat_id 
        INNER JOIN comment AS d
      ON o.article_id=d.article_id
      INNER JOIN editor AS e
      ON e.email=o.editor_id LIMIT 4");



while($rr=mysqli_fetch_array($row)){
    
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
                    <a href="single-post.php?article_id='.$rr['article_id'].'" class="post-comment"><img src="img/core-img/chat.png" alt="like button" name="like_btn"> <span>'.$rr['count'].'</span></a>
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
            $row = mysqli_query($db, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
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
                  <select class="form-control select2" style="width: 100%;" name="campus">
                    <option selected="selected">Select Category</option>';

                        <option value="politics">politics</option>
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
$row2 = mysqli_query($db, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
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
$row2 = mysqli_query($db, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
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
                                <li><a href="mailto:contact@youremail.com">customercare@campusvibes.com</a></li>
                                <li><a href="tel:+254 714 757251">+254 769869064</a></li>
                                <li><a href="tel:+254 714 757251">+254 714 757251</a></li>
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
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </i><a href="https://campusvibes.com" target="_blank">Campus Vibes</a>
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