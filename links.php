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
					<h2>Helpful Sites</h2>
					<p>List helpful sites</p>
						<p>For sparring gear of your own please visit: <a href="http://www.woodenswords.com">Purple Heart Armory</a></p>
						<p>Find helpful books about medieval swordsmanship: <a href="http://www.amazon.com">Amazon</a></p>
						<p>The source of mass knowledge: <a href="http://www.google.com">Google</a></p>
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

