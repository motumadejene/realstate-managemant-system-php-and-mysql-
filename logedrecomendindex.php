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
                <a class="navbar-brand" href="logedrecomendindex.php"><i class="fa fa-home"></i>VMJMBOE <span>PROPERTY</span></a>
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
    <form class="pt-3"  action="recomindex.php" method="POST" enctype="multipart/form-data">
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
 <div class="container">
  
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
   $city =  $_POST['city'];
   $location =  $_POST['location'];
   $minprice =  $_POST['minprice'];
   $maxprice =  $_POST['maxprice'];
   $bedroom =  $_POST['bedroom'];
   $bathroom =  $_POST['bathroom'];
   $landsize =  $_POST['landsize'];

   $price = range($minprice,$maxprice);
            $conn = new mysqli('localhost','root','','realstate');

   
            if($conn->connect_error){
                die('connection faild :' .$conn->connect_error);
            }

          
            $query = " SELECT * from property  where status = '1' and city = '$city' and location = '$location' and price BETWEEN $minprice and $maxprice and bedroom = '$bedroom' and bathroom = '$bathroom' and landsize = '$landsize' ";
            $result = mysqli_query($conn, $query);
            $sth = $conn->query($query);
            $row=mysqli_fetch_array($sth);
           
            

            
            ?>
   
 
   <?php while($row = $result->fetch_assoc()):  $s=$row['image']; ?>
	
   
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
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
    
	
   
   <?php
   $city1 =  $_POST['city'];
   $location1 =  $_POST['location'];
   $minprice1 =  $_POST['minprice'];
   $maxprice1 =  $_POST['maxprice'];
   $bedroom1 =  $_POST['bedroom'];
   $bathroom1 =  $_POST['bathroom'];
   $landsize1 =  $_POST['landsize'];

   $price1 = range($minprice1,$maxprice1);
          
            $query1 = " SELECT * from property  where status = '1' and city = '$city1' and location = '$location1' and price not BETWEEN $minprice and $maxprice   and bedroom = '$bedroom1' and bathroom = '$bathroom1' and landsize = '$landsize1' ";
            $result1 = mysqli_query($conn, $query1);
            $sth1 = $conn->query($query1);
            $row1=mysqli_fetch_array($sth1);
           
            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row1 = $result1->fetch_assoc()):  $s1=$row1['image']; ?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">

	   <a href="logeddetail.php?details=<?php echo $row1['ID']; ?>"><?php echo '<img src="template/image/'.$s1.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row1['ID']; ?>"><?php echo $row1['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row1['city']; ?><br><?php echo $row1['location']; ?></p>
	   <h4> Birr <?php echo $row1['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row1['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row1['bathroom']; ?></li>
		 <li><span>Land size:</span> <?php echo $row1['landsize']; ?> ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row1['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row1['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
<?php
   $city2 =  $_POST['city'];
   $location2 =  $_POST['location'];
   $minprice2 =  $_POST['minprice'];
   $maxprice2 =  $_POST['maxprice'];
   $bedroom2=  $_POST['bedroom'];
   $bathroom2 =  $_POST['bathroom'];
   $landsize2 =  $_POST['landsize'];

   $price2 = range($minprice2,$maxprice2);
          
            $query2 = " SELECT * from property  where status = '1' and city = '$city2' and location != '$location2' and price  BETWEEN $minprice2 and $maxprice2   and bedroom = '$bedroom2' and bathroom = '$bathroom2' and landsize = '$landsize2' ";
            $result2 = mysqli_query($conn, $query2);
            $sth2 = $conn->query($query2);
            $row2=mysqli_fetch_array($sth2);
           
            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row2 = $result2->fetch_assoc()):  $s2=$row2['image']; ?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">

	   <a href="logeddetail.php?details=<?php echo $row2['ID']; ?>"><?php echo '<img src="template/image/'.$s2.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row2['ID']; ?>"><?php echo $row2['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row2['city']; ?><br><?php echo $row2['location']; ?></p>
	   <h4> Birr <?php echo $row2['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row2['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row2['bathroom']; ?></li>
		 <li><span>Land size:</span> <?php echo $row2['landsize']; ?> ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row2['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row2['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
    
<?php
   $city3 =  $_POST['city'];
   $location3 =  $_POST['location'];
   $minprice3 =  $_POST['minprice'];
   $maxprice3 =  $_POST['maxprice'];
   $bedroom3=  $_POST['bedroom'];
   $bathroom3 =  $_POST['bathroom'];
   $landsize3 =  $_POST['landsize'];

   $price3 = range($minprice3,$maxprice3);
          
            $query3 = " SELECT * from property  where status = '1' and city = '$city3' and city != '$city' and city != '$city1' and city != '$city2' and location = '$location3' and price  BETWEEN $minprice3 and $maxprice3  ";
            $result3 = mysqli_query($conn, $query3);
            $sth3 = $conn->query($query3);
            $row3=mysqli_fetch_array($sth3);
           
            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row3 = $result3->fetch_assoc()):  $s3=$row3['image']; ?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">

	   <a href="logeddetail.php?details=<?php echo $row3['ID']; ?>"><?php echo '<img src="template/image/'.$s3.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row3['ID']; ?>"><?php echo $row3['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row3['city']; ?><br><?php echo $row3['location']; ?></p>
	   <h4> Birr <?php echo $row3['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row3['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row3['bathroom']; ?></li>
		 <li><span>Land size:</span> <?php echo $row3['landsize']; ?> ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row3['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row3['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
<?php
   $city4 =  $_POST['city'];
   $location4 =  $_POST['location'];
   $minprice4 =  $_POST['minprice'];
   $maxprice4 =  $_POST['maxprice'];
   $bedroom4=  $_POST['bedroom'];
   $bathroom4 =  $_POST['bathroom'];
   $landsize4 =  $_POST['landsize'];

   $price4 = range($minprice4,$maxprice4);
          
            $query4 = " SELECT * from property  where status = '1' and city = '$city4' and city != '$city' and city != '$city1' and city != '$city2'  and city != '$city3' and location = '$location4'  ";
            $result4 = mysqli_query($conn, $query4);
            $sth4 = $conn->query($query4);
            $row4=mysqli_fetch_array($sth4);
           
            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row4 = $result4->fetch_assoc()):  $s4=$row4['image']; ?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">

	   <a href="logeddetail.php?details=<?php echo $row4['ID']; ?>"><?php echo '<img src="template/image/'.$s4.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row4['ID']; ?>"><?php echo $row4['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row4['city']; ?><br><?php echo $row4['location']; ?></p>
	   <h4> Birr <?php echo $row4['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row4['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row4['bathroom']; ?></li>
		 <li><span>Land size:</span> <?php echo $row4['landsize']; ?> ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row4['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row4['ID']; ?>">DETAILS</a></span></li>
	   </ul>
		</div>
	  </div>
	</div>


<?php endwhile; ?>
<?php
   $city5 =  $_POST['city'];
   $location5 =  $_POST['location'];
   $minprice5 =  $_POST['minprice'];
   $maxprice5 =  $_POST['maxprice'];
   $bedroom5=  $_POST['bedroom'];
   $bathroom5 =  $_POST['bathroom'];
   $landsize5 =  $_POST['landsize'];

   $price5 = range($minprice4,$maxprice4);
          
            $query5 = " SELECT * from property  where status = '1' and city = '$city5' and city != '$city' and city != '$city1' and city != '$city2'  and city != '$city3' and city != '$city4' ";
            $result5 = mysqli_query($conn, $query4);
            $sth5 = $conn->query($query5);
            $row5=mysqli_fetch_array($sth5);
           
            
            ?>
   
   <div class="prop_3 clearfix">
   <?php while($row5 = $result5->fetch_assoc()):  $s5=$row5['image']; ?>
	
   
	<div class="col-sm-4" style="margin-bottom:30px ;">
	 <div class="list_1_1 clearfix">

	   <a href="logeddetail.php?details=<?php echo $row5['ID']; ?>"><?php echo '<img src="template/image/'.$s5.'"  style="width:350px;height:300px" >';?></a>
	   
	    <div class="list_1_1i clearfix">
		  <h3><a href="logeddetail.php?details=<?php echo $row5['ID']; ?>"><?php echo $row5['title']; ?></a></h3>
	   <p><i class="fa fa-map-marker"></i><?php echo $row5['city']; ?><br><?php echo $row5['location']; ?></p>
	   <h4> Birr <?php echo $row5['price']; ?></h4>
	   <ul class="nav_list">
	     <li><span>Bedrooms:</span> <?php echo $row5['bedroom']; ?></li>
		 <li><span>Bathrooms:</span> <?php echo $row5['bathroom']; ?></li>
		 <li><span>Land size:</span> <?php echo $row5['landsize']; ?> ft²</li>
	   </ul>
	   <ul class="nav_list_1">
	     
		 <li><span class="comp"><a href="frontlogin.php?enable=<?php echo $row5['ID']; ?>">Buy</a></span></li>
		 <li><span class="det"><a href="list_detail.php?details=<?php echo $row5['ID']; ?>">DETAILS</a></span></li>
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
