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
	<link href="css/list_detail.css" rel="stylesheet">
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
                        <a class="tag_m  active_tab" href="index.php">Home</a>
                    </li>
                     
					
					
					<li>
                        <a class="tag_m" href="lead.php">My dashbord</a>
                    </li>
					<li>
                        <a class="tag_m" href="frontlogin.php">Contact</a>
                    </li>
					
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>


<?php
   $con = new mysqli('localhost','root','','realstate');
   $result = $con->query("SELECT * FROM property ")or die($con->error);
$id = $_GET['details'];
   if($con->connect_error){
	   die('connection faild :' .$con->connect_error);
   } 
   
   ?>
   <?php
            $conn = new mysqli('localhost','root','','realstate');

   
            if($conn->connect_error){
                die('connection faild :' .$conn->connect_error);
            }

          
            $query = " SELECT * from property where id =$id  ";
            $result = mysqli_query($conn, $query);
            $sth = $conn->query($query);
            $row=mysqli_fetch_array($sth);
            $s = $row['image']
			
            

            
            ?>
   
<section id="list_detail">
 <div class="container">
  <div class="row">
    <div class="col-sm-9">
	 <div class="list_detail_lm clearfix">
	   <div class="list_detail_lm1 clearfix">
	     <div class="carousel slide article-slide" id="article-photo-carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner cont-slider">

   
    <div class="item active">
	<a href=""><?php echo '<img src="template/image/'.$s.'"  style="width:900px;height:500px" >';?></a>
    </div>
  </div>
  <!-- Indicators -->
 
</div>
	   </div>
	   <div class="list_detail_lm2 clearfix">
	    <div class="col-sm-6">
		 <div class="list_detail_lm2l">
		  <ul>
		  <li><span>title:</span> <?php echo $row['title']; ?>  </li>
		   <li><span>City:</span> <?php echo $row['city']; ?>  </li>
		   <li><span>location:</span> <?php echo $row['location']; ?>   </li>
		   <li><span>Bedrooms:</span><?php echo $row['bedroom']; ?>  </li>
		   
		  </ul>
		 </div>
		</div>
		<div class="col-sm-6">
		 <div class="list_detail_lm2l">
		  <ul>
		   
		  
		  <li><span>Property size:</span> <?php echo $row['landsize']; ?>  ft²</li>
		   <li><span>Bathrooms:</span><?php echo $row['bathroom']; ?>  </li>
		   
		  </ul>
		 </div>
		</div>
	   </div>
	   
	   <div class="col-sm-12">
        
	    </div>
	     <div class="prop_3 clearfix">
          <div class="col-sm-6">
	 
	</div>
     	  <div class="col-sm-6">
	 <div class="list_1_1 clearfix">
	   
	</div>
       </div>
	     <div class="prop_3 clearfix">
          <div class="col-sm-6">
	 <div class="list_1_1 clearfix">
	   
	  </div>
	</div>
     	  <div class="col-sm-6">
	 <div class="list_1_1 clearfix">
	  
	  </div>
	</div>
       </div>
   </div>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="list_detail_rm clearfix">
	  <div class="list_detail_rm_1 clearfix">
	    <ul>
		 <li class="bg_1">Birr <?php echo $row['price']; ?> </li>
		 <li class="bg_2"><i class="fa fa-user"></i> <?php echo $row['username']; ?> </a></li>
		 <li class="bg_2"><i class="fa fa-map-marker"></i> <?php echo $row['location']; ?> </a></li>
		
		</ul>
	  </div>
	  <div class="list_detail_rm_2 clearfix">
		<form  action="sendrequest.php" method="POST" enctype="multipart/form-data" >
		<h3>SEND REQUEST</h3>
	   
	   <textarea placeholder="Send Your Offer Message" class="form-control form_1" name="message"></textarea>
	   <input type="hidden" class="form-control" name="to" id="status_id" aria-describedby="status_id" placeholder="status_id" value="<?php echo $row['username']; ?>">
	   <input type="hidden" class="form-control" name="status_id" id="status_id" aria-describedby="status_id" placeholder="status_id" value="1">
	   <h5><button class="button mgt">SEND</button></h5>
	  </div>

		</form>
	  
	 
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
