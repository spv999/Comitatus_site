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
						<h2>Archives</h2>
						<p>Cant find it elsewhere? Find it here! This is a basic PHP call to our entire 'file' archive. If it's on the server, it will be displayed in this list
						 without apology.</p>
						
						<?php		
							echo "<form name='jump1'>
									<p align='center'>
										<select name='menu1'>";
										
							$di = new RecursiveDirectoryIterator('files/');
							foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
								$name = explode("\\", $filename);
								$name = end($name);
								echo "<option value=".$filename.">".$name."</option>";
							}
							echo "<input type='button' onClick='window.open(document.jump1.menu1.options[document.jump1.menu1.selectedIndex].value);' value='Open'></select></p></form>";
						?>

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

