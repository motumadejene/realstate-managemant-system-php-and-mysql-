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
	   <li><a href="template/pages/samples/login.php"><i class="fa fa-user"></i> <?php session_start(); echo '  '. $_SESSION['username'] ; ?></a></li>
	   
	  </ul>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1l text-center clearfix">
		 <ul>
		  
		 </ul>
	 </div>
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1r text-center clearfix">
		  <ul class="social-network social-circle">
		  <a type="button" class="btn btn-primary" href="template/logout.php">logout</a>
			<li><a href="#" class="icoLinkedin" title="logout"><i class="fa fa-user"></i></a></li>
			
							
		 </ul>
		

	 </div>
	 
	</div>
	
	<div class="col-sm-4">
	 <div class="top_1l text-center clearfix">
		 <ul>
		 
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
                <a class="navbar-brand" href="logedindex.php"><i class="fa fa-home"></i>VMJMBOE <span>PROPERTY</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_m  active_tab" href="index.php">Home</a>
                    </li>
                     
					
					
					<li>
                        <a class="tag_m" href="lead.php">My dashbord</a>
                    </li>
					
					
					
					
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>

<section id="booking">
 <div class="container">
  <div class="row">
   <div class="booking_1 clearfix">
    <form class="pt-3"  action="logedrecomendindex.php" method="POST" enctype="multipart/form-data">
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	 <input class="form-control" placeholder="City" name="city" type="text">
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	 <input class="form-control" placeholder="Location" name="location" type="text">
	 </div>
	</div>
    <div class="col-sm-3">
	 <div class="booking_1i clearfix">
	 <input class="form-control" placeholder="Bed Room" name="bedroom" type="text">
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	 <input class="form-control" placeholder="Bed Room" name="bathroom" type="text">
	 </div>
	</div>
   </div>
   <div class="booking_1 clearfix">
    <div class="col-sm-3">
	 <div class="booking_1i clearfix">
	 <input class="form-control" placeholder="Land Size In ft²" name="landsize" type="text">
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	    <input class="form-control" placeholder="Min Price" name="minprice" type="text">
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	    <input class="form-control" placeholder="Max Price" name="maxprice" type="text">
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="booking_1i clearfix">
	    <h5 class="mgt"><button type="submit" class="button mgt">SEARCH</button></h5>
	 </div>
	</div>

	</form>
	
   </div>
  </div>
 </div>
</section>




<section id="prop">
 <div class="container"> <?php 
               if(isset($_SESSION['request'])){
                                    ?>
            <div class="alert alert-warning alert-dismissible show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['request'];?>
                
            </div>
			
        <?php 
 }
 
 unset($_SESSION['request']);                            
 ?>
   <div class="prop_2 clearfix">
    <div class="col-sm-6">
	 <div class="prop_2_l clearfix">
	  <h3>RECENT <span>PROPERTIES</span></h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="prop_2_r text-right clearfix">
	  <h5><a href="#">View All Properties</a></h5>
	 </div>
	</div>
   </div>
   <div class="prop_3 clearfix">
   
	
   <?php
   $con = new mysqli('localhost','root','','realstate');
   $result = $con->query("SELECT * FROM property where status = '1' ")or die($con->error);

   if($con->connect_error){
	   die('connection faild :' .$con->connect_error);
   } 
   
   ?>
   <?php
            $conn = new mysqli('localhost','root','','realstate');

   
            if($conn->connect_error){
                die('connection faild :' .$conn->connect_error);
            }

          
            $query = " SELECT * from property where status = '1' ";
            $result = mysqli_query($conn, $query);
            $sth = $conn->query($query);
            $row=mysqli_fetch_array($sth);
            
            

            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row = $result->fetch_assoc()):  $s=$row['image'];?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">
	   <a href="logeddetail.php?details=<?php echo $row['ID']; ?>"><?php echo '<img src="template/image/'.$s.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row['city']; ?><br><?php echo $row['location']; ?></p>
	   <h4> Birr <?php echo $row['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row['bathroom']; ?></li>
		 <li><span>Land size:</span> 110 ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 
	   <li><span class="det"><a href="logeddetail.php?details=<?php echo $row['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
    
	
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
