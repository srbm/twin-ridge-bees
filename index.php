<?php
include ("inc/functions.php");
$products = all_products_array();

$pageTitle = "TRB";

include ("inc/header.php");
?>

<!-- Farm Info and Introduciton  -->
<section class="module content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img class="smiling img-responsive" alt="Brian Tyler and Katie Farthing smiling in front of a barn" src="images/farthings-smiling.jpg">
			</div>
			<div class="col-sm-6">
				<h2>Meet your Farmers</h2>
				<p>Each Farthing has a big hand in running things on the ridge. Brian got things going with his bees and recently built a pig pen. Katie spends her time in the garden and preserves what's left over. And Tyler jump started raising the farm's cattle.</p>
			</div>
		</div>
	</div>
</section>

<section class="module parallax parallax-2">
  <div class="container">
    <h1>Rise up</h1>
  </div>
</section>

<!-- Pig Info  -->
<section class="module content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2>Introducing "Pig"</h2>
				<p>Twin Ridge Farm recently added a pig pen and these pink babes.  They enjoy the sweet country air and rumaging around their pen.</p>
			</div>
			<div class="col-sm-6">
				<img class="pigs img-responsive" alt="45 degree angle shot of pigs roaming around a pig pen built out of pallets." src="images/pigs-in-the-pen.jpg">
			</div>
		</div>
	</div>
</section>

<section class="module parallax parallax-3">
  <div class="container">
    <h1 class="fly">fly around</h1>
  </div>
</section>

<!-- Bees  -->
<section class="module content">
	<div class="container">
		<div class="row">
		<div class="col-sm-6">
			<img class="bees img-responsive" alt="45 degree angle shot of pigs roaming around a pig pen built out of pallets." src="images/row-of-hives.jpg">
		</div>
			<div class="col-sm-6">
				<h2>Brian's Bees</h2>
				<p>On the ridge we like our honey fresh and easy. so we let the bees do most of the work. We're always expanding and love helping out our fellow bee keepers. Feel free to ask us anything!</p>
			</div>
		</div>
	</div>
</section>

<section class="module parallax parallax-4">
  <div class="container">
    <h1 class="honey">honey for all</h1>
  </div>
</section>



	<!-- Search  -->
	<section class="module content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 search">
					<h2>Search our farm for everything we sell at the Lancaster Farmers Market.</h2>
					<p>Open Saturdays 9am-1pm<br>
						You may also <a href="../products.php">Browse</a> everything we have to offer.</p>
				</div>
				<div class="col-sm-6 search-box">
					<form class="form-inline" method="get" action="products.php">
						<div class="form-group">
							<label for="s">Search:</label>
								<input class="form-control" type="text" name="s" id="s" />
								<input class="btn btn-default" type="submit" value="go" />
							</div>
						</form>
					</div>
			  	</div>
				</div>
		</div>
	</section>

<?php include("inc/footer.php"); ?>
