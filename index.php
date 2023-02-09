<?php
include('includes/config.php');
session_start();
error_reporting(0);

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Retirement Home Management System || Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--Custom Theme files-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic|Niconne' rel='stylesheet' type='text/css'>
	<!--webfonts-->
</head>
<body>
<?php include_once('includes/header.php');?>
	</div>	
</div>	
<div class="banner-section">
	<div class="container">
		<div class="banner-head">
			<h1>Starehe Retirement home management system</h1>
			<p>
				Starehe the the perfect tool for 
				caring for senior citizens.</br> 
				Manage your retirement services,
				patients, employees </br> and more with 
				just a few clicks.
			</p>
		</div>
	</div>
</div>
		<div class="welcome-section">
				<div class="container">
					<div class="welcom-grids">
						<div class="col-md-6 welcom-grid-img">
							<img src="images/v1.jpg" title="img" />
						</div>
						<div class="col-md-6 welcom-grid-text">
							<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<h2><?php  echo $row['PageTitle'];?></h2>
							<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
						</div>
						<div class="clearfix"> </div>  
					</div>
				</div>
			</div>
			<!--start-letest-->
			 <div class="letest-section">
	 			<div class="container">
	 				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='eligibility' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	 				<h3><?php  echo $row['PageTitle'];?></h3>
	 				<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
	 				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='rules' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	 				<h3><?php  echo $row['PageTitle'];?></h3>
	 				<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
	 				
    </div>
 </div>
 
 <!--/End-services-->
<div class="Events">
	<div class="wmuSlider example1">
		 	<div class="container">
		 		<h3>Gallery</h3>
				 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://lh3.googleusercontent.com/9sWrfgGDG0Bn13MtYWt6Fm-owThYeJBu4tLZyB4Y7apsxt2aRC3LjxnCaVcjV_3ORbQTvH4R6O41T_nE2w88qzEBIDIWEg=s1000" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbA4jAJ9hSeowBqtQekgcaF-cEYeI36ZbNo4qDCSUo4MwivRd5VlVl4XZRLw8YOixF878&usqp=CAU" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="images/img/trio.jpg" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://www.kenyans.co.ke/files/styles/article_style_mobile/public/images/news/old_guys.jpg?itok=yzw1E4Tw" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://thumbnails.texastribune.org/1ZZxTWP7gu2cIC9zCCZzen99JEo=/850x570/smart/filters:quality(75)/https://static.texastribune.org/media/files/9a9343b78156f9f6f80183509b9f4fee/ATX%20Retirement%20Homes%20AG%20TT%2004.jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://www.globalsistersreport.org/files/4%20c_6.jpg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
		 			 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://warwick.ac.uk/fac/soc/law/research/projects/rlaaa3069/image-of-3-elderly-kenyan-women-header-1a.jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://www.kenyans.co.ke/files/styles/article_style_mobile/public/images/news/old_guys.jpg?itok=yzw1E4Tw" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://files.globalgiving.org/pfil/41738/pict_large.jpg?m=1566305683000" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXdZ6CKaJ4NhE5mblpQ34Cn7H-8rDZ9rP4_w&usqp=CAU" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://media.istockphoto.com/id/1413582841/photo/black-nurse-and-senior-man-in-wheelchair-looking-through-the-window-at-nursing-home.jpg?b=1&s=170667a&w=0&k=20&c=eNtlZVzrPndBZZV9U1mWfVUg6Xqbnb6B4iPwD3KoI-k=" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img style = "height: 257px; width: 358px;" src="https://media.vaticannews.va/media/content/dam-archive/vaticannews/multimedia/2020/05/07/2020.05.07-Kariobang-home-for-the-aged-in-Nairobi-Kenya.jpg/_jcr_content/renditions/cq5dam.thumbnail.cropped.750.422.jpeg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
			
			
				 </div>
		  	</div>
		  	<div class="clearfix"> </div>  	
		</div>
	</div>
  </div>          
   <script src="js/jquery.wmuSlider.js"></script> 
					<script>
       				     $('.example1').wmuSlider();         
   					</script> 	           	      

<!--/new-projects-->
	
	<!--/start-footer-->
	<?php include_once('includes/footer.php');?>
								<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>				