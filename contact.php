<!DOCTYPE html><!--CSS design from http://freehtml5templates.com -->
<html>

<head>
	<?php echo file_get_contents("menus/imports.html"); ?>
</head>

<body>
	<div id="wrapper"><!--start of wrapper-->
		<header><!--start of header-->
			<?php echo file_get_contents("menus/header.html");?>
		</header><!--end header-->

		<nav><!--menu across the top -->
				<?php echo file_get_contents("menus/menu.html");?>
		</nav><!--end menu code-->

		<section id="main"><!-- main area and sidebar area-->
			<section id="content"><!--start content-->
				<article class="col-1">
					<h2>Contact Us</h2>  
					<p>New member? Email Dr. Lawson for more information on joining and events!</p>
					<p>Event manager? Comitatus is available for appearances all kinds of events. 
					We have performed at schools, conventions, expos, and even senior centers.  
					We can perform demonstrations with a variety of weapons and can encourage 
					audience participation with introductory lessons. Depending on your request, 
					we generally require a fairly large open space to avoid injury and please give 
					us as much advance notice as possible. Please email Dr. Lawson for more information!</p>

				</article>
				<article class="col-2">
					<h2>Information:</h2> 
					<a href="bridgewater.edu"> Bridgewater College Homepage </a> </br>
					
					Email </br>
					Dr. Gavin Lawson </br>
					glawson@bridgewater.edu </br>
					</br>
					College Phone Number </br>
					540-828-8000 </br>
					</br>
					College Address </br>
					Bridgewater College </br>
					402 East College Street </br>
					Bridgewater, VA 22812 </br>
					</br>
					<a href="http://www.facebook.com/groups/410173749031712/" target="_blank"> <img src="css/images/facebook.png" height="40px" width="40px" /> </a>
				</article>

			</section><!--end main content area-->

		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html");?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
<!--template from: http://freehtml5templates.com -->

</body>
</html>

