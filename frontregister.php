

<?php 

    



?>
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
                <a class="navbar-brand" href="index.html"><i class="fa fa-home"></i>VMJMBOE <span>PROPERTY</span></a>
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
            <div class="container " style="margin-bottom:100px;margin-top:50px; width:600px;">
            <?php 
              session_start(); if(isset($_SESSION['register'])){
                                    ?>
            <div class="alert alert-warning alert-dismissible show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['register']; ?>
                
            </div>
        <?php 
 }
 session_destroy();
                                
 ?>
            <form class="pt-3" action="template/pages/samples/forregister.php" method="POST" enctype="multipart/form-data" >
              
              <div class="form-floating mb-3 w-100" >
             
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email" name="email" required>  
               
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="phonenumber">Phone Number</label>
                                                    <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="phonenumber" name="phonenumber" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                    <label for="username">User Name</label>
                                                    <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username" required>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Password</label>
                                                    <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="password" name="password" required>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="username">city</label>
                                                    <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="city" name="city" required>
                                                    <label for="adress"></label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                <label for="adress">address</label>
                                                <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="addres" name="addres" required>
                                                      
                                                    </div>

                                                    <label for="adress"></label>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                <label for="adress"></label>
                                                <select class="form-select" id="usertype" aria-label="Default select example" name="usertype">
                                                <label for="adress"></label>
                                            <option value="buyer">buyer</option>
                                            <option value="seller">seller</option>
                                            </select>
                                            <label for="adress"></label>
                                             </div>
                                            </div>
                                                <input type="hidden" class="form-control" name="status_id" id="status_id" aria-describedby="status_id" placeholder="status_id" value="0">
                                               
                                               
                                                <div class="text-center mt-4 fw-light">login to your account? <a class="text-primary" href="frontlogin.php">login page</a>
                                                
                                             
                                                </div>
                                                </div>
                                        
                
                                            <div class="mt-4 mb-0">
                                            
                                               
                                            <button type="submit" id="save " class="btn btn-outline-primary w-100" value="Login" name="save">Send Request</button>
                                            </div>
                                            
                                            </form>
                                                </div>
                                                
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
