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

                                              <li><a href="single-post.php?category='.htmlentities($row['cat_id']).'">'.$row['cat_name'].'</a></li>';
                                                 }
                                    ?>
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