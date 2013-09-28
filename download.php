<!DOCTYPE html><!--CSS design from http://freehtml5templates.com -->
<html>

<head>
	<?php echo file_get_contents("menus/imports.html"); ?>
</head>

<body>
	<div id="wrapper"><!--start of wrapper-->
		<header><!--start of header-->
			<?php echo file_get_contents("menus/header.html"); ?>
		</header><!--end header-->

		<nav><!--menu across the top -->
				<?php echo file_get_contents("menus/menu.html"); ?>
		</nav><!--end menu code-->

		<section id="main"><!-- main area and sidebar area-->
			<section id="content"><!--start content-->
				
				<h2> Free and Open Source </h2>
					<p>Shawn Vernier, technical development for this site. I am providing 
					this entire site, minus some files and photos for size's sake, available 
					to fork on GitHub under the MIT Open Source License. Nothing fancy. 
					This site would not exist if not for many other open source projects, 
					the help of many comment threads and stackoverflow articles, and many hours 
					of googling. Thus I provide this site, free of charge, to anyone who wishes 
					to leverage the source code for future projects of their own. </p>
				<p><b><a href="https://github.com/spv999/Comitatus_Site" target="_blank">Fork at Github</a></b></p>

				

			</section><!--end main content area-->
		
		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html"); ?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->

</body>
</html>

