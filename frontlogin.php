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
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<script src="js/jquery-2.1.1.min.js"></script>
    <scrip src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
    <div class="col-sm-4">
	 <div class="top_1l clearfix">
	  <ul>
	   
	  </ul>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1r text-center clearfix">
		  <ul class="social-network social-circle">
							
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
                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i>VMJMBOE <span>PROPERTY</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_m  " href="index.php">Home</a>
                    </li>
                     
                   
					
					
					<li>
                        <a class="tag_m active_tab" href="frontlogin.php">Contact</a>
                    </li>
					
					
					
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>


<section>
<div id="layoutSidenav_content">
            <div class="container " style="margin-bottom:100px;margin-top:50px; width:400px;">
<h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3"  action="template/pages/samples/forlogin.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                <select class="form-select" id="usertype" aria-label="Default select example" name="usertype">
                                            
                                            <option value="buyer">buyer</option>
                                            <option value="seller">seller</option>
                                            <option value="admin">admin</option>
                                    
                                        </select>
                </div>

                
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="frontregister.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
</div>
</section>


&emsp;

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
