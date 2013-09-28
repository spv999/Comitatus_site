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
				<h2>Honorem, Virtute et Ferro: Honor, Valor and Steel</h2>
					<p>The goal of 
					the Bridgewater College Comitatus is to promote the study and safe practice of 
					the Western Martial Arts, the armed and unarmed martial arts of Medieval and 
					Renaissance Europe and Britain, primarily in the tradition of the German fechtmeisters 
					(fight masters) of the 14th through 16th centuries. Club practices include the use of 
					medieval weaponry (longsword, sword and buckler, poleaxe, dagger, rapier, etc.) and 
					wrestling techniques in solo and partner drills and free sparring.  Additionally, the 
					club promotes the development of chivalric attitudes on and off the field and an appreciation 
					of the heritage of the Western martial traditions.</p>
				<div id="accordion">
					<h2>First Article Title</h2>
						<div>
							<img src="css/images/knighthelmet.png" alt="" class="alignleft" /><p>This is
								where an article about an upcoming event could go. The link in the 
								title could also be removed from here 
								as well.</p>
						</div>
					<h2>Second Article Title</h2>
						<div>
							<img src="css/images/knighthelmet.png" alt="" class="alignleft" /><p>This is
								where an article about an upcoming event could go. The link in the 
								title could also be removed from here 
								as well.</p>
						
						</div>
					<h2>Third Article Title</h2>
						<div>
							
							<img src="css/images/knighthelmet.png" alt="" class="alignright" /><p>This is
								where an article about an upcoming event could go. The link in the 
								title could also be removed from here 
								as well.</p>
						
						</div>
				
				</div> <!-- end accordion -->

			</section><!--end main content area-->
		
		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html"); ?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
</body>
</html>

