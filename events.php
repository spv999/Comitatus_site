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

				<article>
					<h2>Calendar of Events</h2>
					<center><!--google calendar code-->
					<iframe src="https://www.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23c0c0c0&amp;src=bridgewatercollegecomitatus%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border:solid 1px #777 " width="100%" height="500" frameborder="0" scrolling="no"></iframe>
					</center>
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

