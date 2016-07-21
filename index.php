<?php
include ("inc/functions.php");
$products = all_products_array();

$pageTitle = "TRB";

include ("inc/header.php");
?>

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