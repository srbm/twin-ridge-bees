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
				<p>All Farthings have a big hand in running things on the ridge. Brian got things going with his bees and recently built a pig pen. Katie spends her time in the garden and preserves whats left over. And Tyler jump started raising the farms cattle.</p>
			</div>
		</div>
	</div>
</section>



	<!-- Search  -->
	<div class="container">
		<div class="search">
			<h2>Search our database for everything well sell at the Lancaster Farmers Market.</h2>
			<p>Open Saturdays 9am-1pm</p>
			<p>You may also <a href="../products.php">Browse</a> everything we have to offer.</p>

			<form class="form-inline" method="get" action="products.php">
				<div class="form-group">
					<label for="s">Search:</label>

						<input class="form-control" type="text" name="s" id="s" />
						<input class="btn btn-default" type="submit" value="go" />

				</div>
			</form>
  	</div>
	</div>

<?php include("inc/footer.php"); ?>
