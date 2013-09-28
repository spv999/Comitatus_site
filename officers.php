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
			
				<article>
					<h2>Officers</h2>
					<p>Officerships are open to any member that meets the requirements set forth in the Bylaws. 
					Officer elections are held at the end of every Fall semester. Officers are replaced
					under two conditions: if they no longer wish to be an officer or if they hold Senior status.
					Prior officers are expected to 'mentor' the new officership during the following Spring semester.</p>
				</article>
				<div id="accordion">
					
					<h2>Overlord: Dr. Gavin Lawson</h2>
						<div>
							<img src="files/officers/overlord.jpg" class="alignright"><p>
								A small bio of anything nice someone can manage to say about Dr. Lawson goes here. 
								Etc for the other officers. 
							</p>
						</div>
					
					<h2>Atheling: Shannon Barrett</h2>
						<div>
							<img src="files/officers/atheling.jpg" class="alignright"><p>
								
							</p>
						</div>
					<h2>Thegn: Richard Byrd</h2>
						<div>
							<img src="files/officers/thegn.jpg" class="alignright"><p>
								... Richard's image is not listed on stalkernet. I thought this a fitting substitute.
							</p>
						</div>
					<h2>Seneschal: Margaret Haynes</h2>
						<div>
							<img src="files/officers/seneschal.jpg" class="alignright"><p>
								
							</p>
						</div>
					<h2>Exchequer: Graham Ryder</h2>
						<div>
							<img src="files/officers/exchequer.jpg" class="alignright"><p>
								
							</p>
						</div>
					<h2>Herald: Jonathan Gee</h2>
						<div>
							<img src="files/officers/herald.jpg" class="alignright"><p>
								
							</p>
						</div>
					
				</div> <!-- end accordion -->

			</section><!--end main content area-->
			
		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html"); ?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
<!--template from: http://freehtml5templates.com -->
		<!-- FlexNav  -->
		<script type="text/javascript" src="js/jquery.flexnav.min.js"></script>
		 <script>
        	$(".flexnav").flexNav();
    	</script>     
</body>
</html>

