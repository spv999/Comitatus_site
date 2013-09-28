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

				<h2>Armory</h2>
				<p>List the weapons and information 
				about them that are used in class</p>

				<div id="tabs">
					<ul>
						<li><a href="#tabs-1">German Longsword</a></li>
						<li><a href="#tabs-2">Rondel Dagger</a></li>
						<li><a href="#tabs-3">Sword and Buckler</a></li>
						<li><a href="#tabs-4">Polearm</a></li>
						<li><a href="#tabs-5">Dusack</a></li>
						<li><a href="#tabs-6">Armor</a></li>
					</ul>
					
					<div id="tabs-1">
						<p>
						<figure>
							<img src="files/weapons/long sword.jpg" height="200" width="200"/>
							<figcaption> Caption an image! yay.</figcaption>
						</figure>
						We should get picures of our actual equipment. Also explain sparing with each weapon and what we have for safety, etc. </br>
						- - I figure each weapon style can have its own section with a few pictures and a brief discription (history and how we use them). </br>
						</p>
					</div>
					
					<div id="tabs-2">
						<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. 
						Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, 
						ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. 
						Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. 
						Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, 
						tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
					</div>
					
					<div id="tabs-3">
						<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
						<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
					</div>
					
					<div id="tabs-4">
						<p>tab4</p>
					</div>
					
					<div id="tabs-5">
						<p>tab5</p>
					</div>
					
					<div id="tabs-6">
						<p>tab6</p>
					</div>
				</div>
			</section><!--end main content area-->

		</section><!--end main content and sidebar content section-->

		<footer><!--start footer -->
			<?php echo file_get_contents("menus/footer.html");?>
		</footer> <!-- end footer -->
	</div><!--end wrapper code-->
<!--template from: http://freehtml5templates.com -->

</body>
</html>

