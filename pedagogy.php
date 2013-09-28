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
					<h2>Pedagogy</h2>
					<br/>
				</article>				
				<div id="accordion">
					<h2>Swordsmanship ES-186: Lamina Cognitionem</h2>
						<div>
							<img src="css/images/knighthelmet.png" alt="" class="alignleft" />
							<p>Blade of Knowledge</p>
							<p>Information on the swordsmanship class</p>
							
						</div>
					<h2>Mentors: Ex Unus Perceptum Totus Populus</h2>
						<div>
							<img src="css/images/swordshield.png" alt="" class="alignright" />
							<p>From One Learn All People</p>
							<p>Information on the mentorship program</p>
						</div>
					
					<h2>Lessons: Ab Librorum Nos Discere</h2>
						<div>
							<img src="css/images/knighthelmet.png" alt="" class="alignleft" />
							<p>From Books We Learn</p>
							<p>Lesson plans, mentor sheets, terminology, etc</p>
							
							<?php		
								echo "<form name='jump1'>
										<p align='center'>
											<select name='menu1'>";
											
								$di = new RecursiveDirectoryIterator('files/pedagogy/');
								foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
									$name = explode("\\", $filename);
									$name = end($name);
									echo "<option value=".$filename.">".$name."</option>";
									
								}
								echo "<input type='button' onClick='window.open(document.jump1.menu1.options[document.jump1.menu1.selectedIndex].value);' value='Open'></select></p></form>";
							?>
						
						</div>
				</div> <!-- end accordion -->

			
			</section><!--end main content area-->


		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html");?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
<!--template from: http://freehtml5templates.com -->

</body>
</html>

