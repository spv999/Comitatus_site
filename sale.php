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
				<h2>For Sale: Comitatus Smithery</h2>
					<p>Bridgewater College Comitatus preforms more then demonstrations and practices, we also produce 
					a few artifacts of the era! Every bit of your purchase will go towards supporting Comitatus!</p>
					<p>To request an item, please <a href="contact.php">contact Dr. Lawson</a> with your information.
					We currently do not have an ebay, etsy, craigslist, ect, page and cannot accept anything other then 
					cash or check. Mailing options may be available if needed. While we may have some surplus at times,
					most items are made to order and 'rush' may not be possible (we are college students after all!)
					so please give us plenty of notice!</p>
				<div id="accordion">
					<h2>Comitatus T-Shirts!</h2>
						<div>
							<img src="files/sale/tshirt.jpg" alt="" class="alignright" height="250" width="250" />
							<p>Officially branded Comitatus t-shirt! Front is the Comitatus crest and the reverse 
							holds our motto: "Ab Librorum Nos Discere. Ab Singulis Aliis Nos Experiri"</p>
							<p>Comes in all standard sizes (S,M,L,XL), male and female. Price can vary depending on order quantity 
							(we try to bundle as many orders together as possible, the more orders the more of a discount, but the longer
							the wait.)</p>
							<p>Average price: $20 </p>
						</div>
					<h2>Custom Chainmail!</h2>
						<div>
							<img src="css/sale/chainmail.png" alt="" class="alignright" height="250" width="250"/>
							<p>Custom made chainmail! We can do a variety of weaves, patterns, and colors. Bracelets, necklaces,
							hacky sacks, almost nothing is out of our range (though please not full body shirts!).</p>
							
							<p>We handmake all orders, and some orders may require additional parts. All prices are to-quote 
							depending on materials and complexity.</p>
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

