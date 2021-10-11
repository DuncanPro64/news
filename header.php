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
                                    <a href="admin/login.php">LOGIN</a>
                                    <a href="admin/register.php">BECOME EDITOR</a>
                                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">DONATE<i class="fas fa-donate"></i></a>
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
                                    echo'<li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Categories</a>
                                        <ul class="dropdown">';
                                            
                                            $query = 'SELECT * FROM category';
                                            $result = mysqli_query($con,$query)or die(mysqli_error($con));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                           
                                              echo'   

                                              <li><a href="categories-post.php?category='.htmlentities($row['cat_id']).'">'.$row['cat_name'].'</a></li>';
                                                 }
                                                    
                                                echo'
                                            </li>';
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                    $query = 'SELECT * FROM category';
                                            $result = mysqli_query($con,$query)or die(mysqli_error($con));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                    echo'   

                                              <li><a href="categories-post.php?category='.htmlentities($row['cat_id']).'">'.$row['cat_name'].'</a></li>';
                                                 }
                                    ?>
                                    <li><a href="#">More</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title" style="font-weight: bold;"><img src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-vitaly-gorbachev/60/fa314a/external-target-business-vitaliy-gorbachev-lineal-vitaly-gorbachev.png"/>HITS OF THE WEEK</li>
                                                <li><a href="#">Top Editor</a></li>
                                                <li><a href="#">Top Photographer</a></li>
                                                <li><a href="#">Photo of the week</a></li>
                                                <li><a href="#">Article of the week</a></li>
                                                
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title"  style="font-weight: bold;"><img src="https://img.icons8.com/external-photo3ideastudio-lineal-photo3ideastudio/64/fa314a/external-magazine-home-office-photo3ideastudio-lineal-photo3ideastudio.png"/>THE MAGAZINE</li>
                                                <li><a href="#">Read Online</a></li>
                                                <li><a href="#">Pre-order</a></li>
                                                <li><a href="#">View Summaries</a></li>
                                                <li><a href="about.php">Editors</a></li>
                                            </ul>
                                               <ul class="single-mega cn-col-4">
                                                <li class="title"  style="font-weight: bold;"><img src="https://img.icons8.com/wired/64/fa314a/donate.png"/>DONATIONS</li>
                                                <li><a href="#">Learn How</a></li>
                                                <li><a href="sponsor.php"> Sponsors</a></li>
                                                <li><a href="contact.html"> Projects</a></li>
                                                <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Donate</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <?php
                                                $query = "SELECT * FROM article as a INNER JOIN category as c ON a.category_id=c.cat_id 
                                                ORDER BY likes DESC,time_posted DESC LIMIT 2";
                                                $result = mysqli_query($con,$query) or die(mysqli_error($con));
                                                while($row =mysqli_fetch_assoc($result)){
                                                       $title = substr($row['article_title'],0,50);
                                                       echo' <!-- Single Featured Post -->
                                                        <div class="single-blog-post small-featured-post d-flex">
                                                            <div class="post-thumb">
                                                                <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                                            </div>
                                                            <div class="post-data">
                                                                <a href="single-post.html" class="post-catagory">'.$row['cat_name'].'</a>
                                                                <div class="post-meta">
                                                                    <a href="#" class="post-title">
                                                                        <h6>'.$title.'.</h6>
                                                                    </a>
                                                                    <p class="post-date"><span> '.date('g:ia', strtotime($row['time_posted'])).'</span> | <span>'.date('F d Y', strtotime($row['date'])).'</span></p>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        }
                                                 ?>

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

