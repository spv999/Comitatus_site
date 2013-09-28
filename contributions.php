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
				<h2>Member Contributions</h2>
				<p>Bridgewater College encourages students to take intrest in a diverse range of subjects through honors projects 
				(written from the perspective of a certain field) and independent studies (written more free verse). This page is
				dedicated as a showcase to the projects undertaken with respect to Comitatus. Ab Librorum Nos Discere!</p>
				<p>Want to get involved? Have a project you would like to submit? <a href="contact.php">Contact Dr. Lawson for information!</a> 
				When submitting your project, please <a href="http://office.microsoft.com/en-us/word-help/results.aspx?qu=save+document+as+pdf&ex=1&origin=HA010064992">save the file as a PDF</a>, 
				send a title and a brief abstract of your project, and you can choose to submit a picture (250x250) </p>
				<div id="accordion">
				
					<h2>Siege Engines: An (Interactive) Study of Siege Warfare</h2>
						<div>
							<img src="files/contributions/vernier_IDS.jpg" alt="" class="alignright" height="300" width="250" />
							<p>Author: Shawn Vernier, Spring 2013. Senior in Computer Science</p>
							<p>A two part study, part one consists of an in-depth look at the 
							various evolutions of siege weapons from ancient times to the invention 
							of gunpowder moderated by Dr. Brock. Part two was the construction of a 
							working scale trebuchet. With a final size of 16 feet tall and ranges of 200 feet 
							with 2lb projectiles, this project ended with a castle-destroying bang. 
							At the time of this writing, the trebuchet still rests out back of 
							McKinney center, and was gifted to Dr. Lawson and the Bridgewater Comitatus. 
							With special thanks to Mandy Swithenbank for the inspiration and aid in construction
							(and for styling this website!)</p>
							<form>
							<input type="button" value="Download PDF" onclick="window.open('files/contributions/Vernier_IDS.pdf')">
							</form>
						</div>
					<h2>Chivalry: An Anthropological Study</h2>
						<div>
							<img src="files/contributions/vernier_anthropology.jpg" alt="" class="alignright" height="250" width="250" />
							<p>Author: Shawn Vernier, Fall 2012. Senior in Computer Science</p>
							<p>A study of medieval chivalry as it was in 14th century France.  
							The survey looks at cultural norms of the period, with a focus 
							on the obligations placed on knights and lords, and how these norms 
							effected and created their obligations that resulted in the idea of 
							the code of chivalry. This entails a look at the social, political, 
							economic, and religious structures of the period and their associated 
							demands and services to the public. </p>
							<form>
							<input type="button" value="Download PDF" onclick="window.open('files/contributions/Vernier_Anthropology_Honors.pdf')">
							</form>
						</div>
					<h2>Weapons of Feudal Europe versus Feudal Japan: Comparative Study</h2>
						<div>
							<img src="files/contributions/vernier_soc.png" alt="" class="alignright" height="250" width="250" />
							<p>Author: Shawn Vernier, Spring 2012. Junior in Computer Science</p>
							<p>A review of the cyclical nature of arms and armor development 
							and how this development was affected by the resources and cultural 
							constraints of the area with a specific focus on central European and 
							Japanese developments. This includes a survey of the weapons used circa 
							1300 through 1500 and their effectiveness in the shifting fields of combat. </p>
							<form>
							<input type="button" value="Download PDF" onclick="window.open('files/contributions/Vernier_Soc_Honors.pdf')">
							<input type="button" value="Download Appendix" onclick="window.open('files/contributions/Vernier_Soc_Honors_Appendix_1.pdf')">
							</form>
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

