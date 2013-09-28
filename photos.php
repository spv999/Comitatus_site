<!DOCTYPE html>

<!-- 
Responisive Image Gallery Courtesy of:
<a href="http://tympanus.net/Development/Elastislide/"><span>&laquo; Previous Demo: </span>Elastislide</a>
			<span class="right_ab">
				<a href="http://www.flickr.com/photos/smanography/" target="_blank">Images by Shermeee</a>
				<a href="http://creativecommons.org/licenses/by/2.0/deed.en_GB">CC BY 2.0</a>
				<a href="http://tympanus.net/codrops/2011/09/20/responsive-image-gallery/"><strong>back to the Codrops post</strong></a>
			</span>
			<div class="clr"></div>

-->
<html lang="en">
<head>
	<?php echo file_get_contents("menus/imports.html"); ?>	
	<!-- elastislide -->
		<link rel="stylesheet" type="text/css" href="css/elastislide_custom.css" />
	<!-- Custom -->
		<link rel="stylesheet" type="text/css" href="css/photos.css" />
		
	<!-- Javascript -->
		<!-- Special -->
		<script type="text/javascript" src="js/photos/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/photos/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/photos/jquery.elastislide.custom.js"></script>
		<!-- Custom -->
		<script type="text/javascript" src="js/photos/photos.js"></script>
	
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
		<div class="rg-image-wrapper">
			{{if itemsCount > 1}}
				<div class="rg-image-nav">
					<a href="#" class="rg-image-nav-prev">Previous Image</a>
					<a href="#" class="rg-image-nav-next">Next Image</a>
				</div>
			{{/if}}
			<div class="rg-image"></div>
			<div class="rg-loading"></div>
			<div class="rg-caption-wrapper">
				<div class="rg-caption" style="display:none;">
					<p></p>
				</div>
			</div>
		</div>
	</script>
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
			
				<div class="content">
					<h2>Image Gallery</h2>
					Links below are pulled from Flickr dynamically and will dynamically reset the gallery. </br>
					<br/>
					<div id="rg-gallery" class="rg-gallery">
						<div class="rg-thumbs">
							<!-- Elastislide Carousel Thumbnail Viewer -->
							<div class="es-carousel-wrapper">
								<div class="es-nav">
									<span class="es-nav-prev">Previous</span>
									<span class="es-nav-next">Next</span>
								</div>
								<div class="es-carousel">
									<ul>
										<?php
											$photoSetID = "photoSetID";
											$flickr = "http://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=YourAPIKey&photoset_id=".$photoSetID."&format=json&nojsoncallback=1";
											
											$data = json_decode(file_get_contents($flickr),true);
											foreach($data['photoset']['photo'] as $value){
												$id = $value['id'];
												$secret = $value['secret'];
												$farm = $value['farm'];
												$server = $value['server'];
												$title = $value['title'];
												
												$photoURL = "http://farm".$farm.".staticflickr.com/".$server."/".$id."_".$secret.".jpg";
												$thumbURL = "http://farm".$farm.".staticflickr.com/".$server."/".$id."_".$secret."_s.jpg";
												
												$descriptionURL = "http://api.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key=YourAPIKey&photo_id=".$id."&format=json&nojsoncallback=1";
												$desData = json_decode(file_get_contents($descriptionURL),true);
												$description = $desData['photo']['description']['_content'];
												echo "<li><a href='#'\"><img src=\"".$thumbURL."\"data-large=\"".$photoURL."\"data-description=\"".$description."\"> </a></li>";
											}
										?>
									
									</ul>
								</div>
							</div>
							<!-- End Elastislide Carousel Thumbnail Viewer -->
						</div><!-- rg-thumbs -->
					</div><!-- rg-gallery -->
					
					<div id="accordion">
						<?php
							$flickr = "http://api.flickr.com/services/rest/?method=flickr.photosets.getList&api_key=YourAPIKey&user_id=YourUserID&format=json&nojsoncallback=1";
							$data = json_decode(file_get_contents($flickr),true);
							
							foreach($data['photosets']['photoset'] as $value){
								$ID = $value['id'];
								$ID = 'http://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=YourAPIKey&photoset_id='.$ID.'&format=json';
								$title = $value['title']['_content'];
								echo "<h2>".$title."</h2> <div>";
								echo "<a href = \"javascript:destroy('".$ID."')\">View Gallery</a></br>";
								$description = $value['description']['_content'];
								echo $description;
								echo "</div>";	
							}					
							
						?>
					</div>
					
					
				</div><!-- content -->

			
			</section><!--end main content area-->

		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html");?>
		</footer> <!-- end footer -->
		
	</div> <!-- end wrapper -->
</body>
</html>