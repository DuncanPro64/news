<?php
include('connection.php');
include('header.php');
include('head-seo.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Campus Vibes| Read Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" lang="en" content="open source x/html and css templates">
<meta name="author" content="mlp design">
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="css/read.css">
<link rel="stylesheet" href="css/responsive.css">
<style>
div.content {
  background-color: lightblue;
  width: 50px;
  height: 110px;
  overflow: scroll;
}


</style>
</head>
<body>


<!--start wrapper-->
<div id="wrapper">

<!--start body-->
<div id="body">

<!--start header-->
<div id="banner">
<h1> The Campus<em>Magazine</em></h1>
  <div class="column"><img src="https://img.icons8.com/external-itim2101-lineal-itim2101/64/fa314a/external-reading-time-management-itim2101-lineal-itim2101.png"/><br><i><small>Enhanced reading</small></i></div>
  <div class="column"><img src="https://img.icons8.com/windows/64/fa314a/bright-mind.png"/><br><i><small>Best content for you</small></i>
  </div>
  <div class="column"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="https://img.icons8.com/dotty/64/fa314a/magazine.png"/></a><br><i><small> Hardcopy available</small></i>
  </div>

<!-- menu -->
<label for="show-menu" class="responsive">&#9776;</label>
<input type="checkbox" id="show-menu" role="button">
<ul id="topnav">
<li><a class="active">Home</a></li>
<li><a href="#">Chapter 2</a></li>
<li><a href="#">Chapter 3</a></li>
<li><a href="#">Chapter 4</a></li>
<li><a href="#">Chapter 5</a></li>
</ul>
<!-- end menu -->
</div>
<!--end of header-->
	<!--start sidebar-->
	<div id="sidebar">
		<h2>About</h2>
		<p>The magazine is published monthly since the first publication in 2021<a href=""> You can visit the about section to learn more about the mission and vision on the campus magazine</a>. Besides this E-magazine, we also have hardcopies with amazing graphics just made for you.</p>
		<p>#Issue 1 of the magazine talks about life in campus, How to start a business as a student, How to deal with academics and Campus innovation. We recognize 1. Kennedy Netunde, 2. Brian Michael; chief editors for this magazine issue</p>
		<h2>ISSUES</h2>
		<ul>
			<li><a href="#">#ISSUE 1</a></li>
			<li><a href="#">#ISSUE 2</a></li>
   			<li><a href="#">#ISSUE 3</a></li>
   			<li><a href="#">#ISSUE 4</a></li>
   			<li><a href="#">#ISSUE 5</a></li>
   			<li><a href="#">#ISSUE 6</a></li>
		</ul>
		<h2>Archives</h2>
		<ul>
			<li><a href="#">2017-Feb</a></li>
			<li><a href="#">2017-Jan</a></li>
			<li><a href="#">2016-Dec</a></li>
			<li><a href="#">2016-Nov</a></li>
			<li><a href="#">2016-Oct</a></li>
			<li><a href="#">2016-Sep</a></li>

		</ul>
		<h2>Links</h2>
		<ul>
			<li><a href="http://twitter.com/mlpdesign">Follow me on Twitter</a></li>
			<li><a href="http://www.mlpdesign.net">MLP Design</a></li>
		</ul>		
	</div>
	<div class="clear"></div>
	<!--end of sidebar-->

	<!--start containter-->
	<div id="container">
	

		
		<!--start content-->
		<div id="content">
			<!--post item-->
			<div class="item">
				<h1 style="background-color:#fa314a;text-align: center;">#ISSUE <i>1</i></h1>
				
				<embed src="campus.pdf" width="100%" height="100%" 
 				type="application/pdf">
				<ul>
					<li>Love Life in Campus</li>
					<li>How do you start a business in Campus</li>
					<li> How to excell Academically</li>
					<li>Party Day </li>
				</ul>
				<span>17 March 2017 @ 1:28 PM | <a href="#">0 Comment(s)</a> | Posted by <a href="#">webmasterneo</a></span>
			</div>
			<!--another post item-->
			<div class="item">
				<h1>Space fillers</h1>
				<p>Donec non dui. Morbi fringilla imperdiet lorem. Fusce risus diam, rutrum eu, hendrerit et, accumsan non, neque. Fusce vitae pede ut massa sodales mattis. Nulla sed justo. Integer nec sem vel tellus tempor gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc faucibus. Nullam nulla ipsum, accumsan sed, tempus sed, adipiscing a, metus. Curabitur varius commodo eros.</p>
				<span>17 March 2017 @ 6:24 PM | <a href="#">0 Comment(s)</a> | Posted by <a href="#">webmasterneo</a></span>
			</div>
			<!--end of another post item-->			
		</div>
		<!--end of content-->

	</div>
	<!--end of container-->

</div>
<!--end of body-->

	<!--start footer-->
	<div id="footer">
		<div class="social-share" style="margin-left:50%;">
                            
                            <div class="social-links">
                                <h3>Share with friends:</h3>
                                <a><img src="https://img.icons8.com/ios-glyphs/30/fa314a/facebook-new.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/twitter-squared.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/instagram-new.png"/></a>
                                <a href="#"> <img src="https://img.icons8.com/ios-glyphs/30/fa314a/pinterest.png"/></a>
                            </div> <!-- .social-links -->
                            
                            
                        </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
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
