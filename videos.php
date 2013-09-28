<!DOCTYPE html><!--CSS design from http://freehtml5templates.com -->
<html>

<!-- 
	Uses AD Gallery courtesy of: http://coffeescripter.com/2009/07/ad-gallery-a-jquery-gallery-plugin/ 
-->

<head>
	<?php echo file_get_contents("menus/imports.html"); ?>
	<!-- Stylesheets -->
		<!-- elastislide -->

			
	<!-- Javascript -->
		<!-- custom jQuery -->
		<script type="text/javascript" src="js/videos/videos.js"></script>
	
  
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
				<h2>Videos</h2>
				<p>This is our video page!</p>
				
				<!-- iFrame video -->
				<?php
					$user = "UC0lek1siITnpSgCTCmw7Qgg";
					$youtube = "https://gdata.youtube.com/feeds/api/users/".$user."/uploads?alt=jsonc&v=2";
					$data = json_decode(file_get_contents($youtube),true);
					
					$video = $data['data']['items'][0]['player']['default'];
					$video = explode('v=', $video);
					$video = $video[1];
					$video = explode('&',$video);
					$video = $video[0];
					$video = "http://www.youtube.com/embed/" . $video;
					echo "<center><div id=\"video\"><iframe id=\"videoFrame\" width=\"100%\" height=\"450\" src=\"".$video."\"></iframe></div></center>";
				?>
				<!-- End iFrame video -->
				<hr />
				
				<div id="accordion">
				
					<?php
						echo "<h2>Recent Videos</h2>";
						echo "<div>";
						echo "<table border='1'>";
						$user = "UC0lek1siITnpSgCTCmw7Qgg";
						$youtube = "https://gdata.youtube.com/feeds/api/users/".$user."/uploads?alt=jsonc&v=2";
						$data = json_decode(file_get_contents($youtube),true);
						$count = 0;
						foreach($data['data']['items'] as $value){
							$video = $value['player']['default'];
							$video = explode('v=', $video);
							$video = $video[1];
							$video = explode('&',$video);
							$video = $video[0];
							$video = "http://www.youtube.com/embed/" . $video;

							$thumb = $value['thumbnail']['hqDefault'];
							echo "<tr>
									<td><a href = \"javascript:play('".$video."')\"><img src=\"".$thumb."\" width=\"100\" height=\"100\"/></a></td>
									<td style='text-align:left;'><a href = \"javascript:play('".$video."')\">".$value['title']."</a><br/>".$value['description']."</td>
									</tr>";		

							$count = $count +1;
							if($count >= 5){
								break;
							}
						}
						echo "</table></div>";
					?>
						
						
					<?php
						$user = "UC0lek1siITnpSgCTCmw7Qgg";
						$youtube = "https://gdata.youtube.com/feeds/api/users/".$user."/playlists?alt=jsonc&v=2";
						$data = json_decode(file_get_contents($youtube),true);
						
						foreach($data['data']['items'] as $value){
							$ID = $value['id'];
							$playlist = 'http://gdata.youtube.com/feeds/api/playlists/'.$ID.'?alt=jsonc&v=2';
							$title = $value['title'];
							echo "<h2>".$title."</h2>";
							echo "<div>";

							echo "<table id='table' border='1'>";
							$user = "UC0lek1siITnpSgCTCmw7Qgg";
							$data = json_decode(file_get_contents($playlist),true);
							foreach($data['data']['items'] as $value){
								$video = $value['video']['player']['default'];
								$video = explode('v=', $video);
								$video = $video[1];
								$video = explode('&',$video);
								$video = $video[0];
								$video = "http://www.youtube.com/embed/" . $video;

								$thumb = $value['video']['thumbnail']['hqDefault'];
								echo "<tr>
									<td><a href = \"javascript:play('".$video."')\"><img src=\"".$thumb."\" width=\"100\" height=\"100\"/></a></td>
									<td style='text-align:left;'><a href = \"javascript:play('".$video."')\">".$value['video']['title']."</a><br/>".$value['video']['description']."</td>
									</tr>";
								
							}
							echo "</table>";
							echo "</div>";
						}
					?>
				</div><!-- end accordion -->
	
			</section><!--end main content area-->

		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html");?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
<!--template from: http://freehtml5templates.com -->

</body>
</html>

