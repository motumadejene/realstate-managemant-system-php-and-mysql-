<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Estate</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/contact.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
    <div class="col-sm-4">
	 <div class="top_1l clearfix">
	  <ul>
	   <li><a href="#"><i class="fa fa-phone"></i> Need Support ? +1-234-567-8901</a></li>
	  </ul>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1l text-center clearfix">
		 <ul>
		  <li><a href="template/dashbord.php"><i class="fa fa-user"></i> Login / Registration</a></li>
		 </ul>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1r text-center clearfix">
		  <ul class="social-network social-circle">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		 </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="header" class="cd-secondary-nav clearfix">
	<nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-home"></i>VMJMBOE <span>PROPERTY</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				<li>
                        <a class="tag_m  " href="index.php">Home</a>
                    </li>
                     
                   
					<li>
                        <a class="tag_m" href="list.php">List</a>
                    </li>
					
					<li>
                        <a class="tag_m" href="list_detail.php">List detail</a>
                    </li>
					
					
					
					<li>
                        <a class="tag_m  active_tab" href="contact.php">Contact</a>
                    </li>
					
                                  </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>



<section id="reg_home">
 <div class="container">
  <div class="row">
   <div class="col-sm-8">
    <div class="reg_home_1 clearfix">
	 <h4>ARE YOU LOOKING FOR A HOUSE OR CUSTOMER FOR YOUR PROPERTY SALE?</h4>
	 <p>Please click the button for register, we will become your best agent and help you for both.</p>
	</div>
   </div>
   <div class="col-sm-4">
    <div class="reg_home_2 text-right clearfix">
	 <h5><a class="button mgt" href="frontregister.php">REGISTER NOW</a></h5>
	</div>
   </div>
  </div>
 </div>
</section>



<section id="footer_bottom" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="footer_bottom_1 text-center clearfix">
	  <p class="mgt"> © 2022 All Rights Reserved | Design by Jimma university Students </p>
	</div>
   </div>
  </div>
 </div>
</section>

<script>
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>

</body>
 
</html>
