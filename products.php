<?php
include ("inc/functions.php");
$products = all_products_array();

$pageTitle = "TRF";
$section = null;
$search = null;
$items_per_page = 8;

if (isset($_GET["s"])) {
  $search = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
}
if (isset($_GET["pg"])) {
  $current_page = filter_input(INPUT_GET,"pg",FILTER_SANITIZE_NUMBER_INT);
}
if (empty($current_page)) {
  $current_page = 1;
}

$total_items = get_catalog_count($section,$search);
$total_pages = 1;
$offset = 0;
if ($total_items >0 ) {
  $total_pages = ceil($total_items / $items_per_page);

  //limit results in redirect
  $limit_results = "";
  if (!empty($section)) {
    $limit_results = "cat=" . $section . "&";
  }

  // redirect too-large page numbers to the last page
  if ($current_page > $total_pages) {
    header("location:products.php?"
           . $limit_results
           . "pg=".$total_pages);
  }
  // redirect too-small page numbers to the first page
  if ($current_page < 1) {
    header("location:products.php?"
           . $limit_results
           . "pg=1");
  }
}

//determine the offset (number of items to skip) for the current page
  //for example: on page 3 with 8 item per page, the offset would be 16
 /*
 *
 *
 $offset = ($current_page - 1) * $items_per_page;

  $pagination = "<div class=\"pagination\">";
  $pagination .= "Pages: ";
  for ($i = 1;$i <= $total_pages;$i++) {
    if ($i == $current_page) {
      $pagination .= " <span>$i</span>";
    } else {
      $pagination .= " <a href='products.php?";
      if (!empty($section)) {
        $pagination .= "cat=".$section."&";
      }
      $pagination .= "pg=$i'>$i</a>";
    }
  }
  $pagination .= "</div>";
	*
	*
*/

if (!empty($search)) {
  $product = search_catalog_array($search,$items_per_page,$offset);
} else if (empty($section)) {
  $product = all_products_array($items_per_page,$offset);
} else {
  $product = category_catalog_array($section,$items_per_page,$offset);
}


include ("inc/header.php");
?>

<div class="section catalog page">

	<div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 search-list">
		    <h2><?php
          if ($search != null) {
            echo "Search Results for \"".htmlspecialchars($search)."\"";
          } else {
            if ($section != null) {
              echo "<a href='products.php'>All Products</a> &gt; ";
            }
            echo "Sold at Lancaster Farmers' Market";
          }
          ?></h2>
        <?php
        if ($total_items < 1) {
          echo "<p>No results found for ($search)</p>";
          echo "<p>Search Again or "
            . "<a href=\"products.php\">Browse All Products</a></p>";
        } else {
        //  echo $pagination; ?>

          <ul class="items list-group">
              <?php
              foreach ($product as $item) {
                  echo get_item_html($item);
               }
               echo "<li class=\"list-group-item\">*Prices subject to change*</li>";
              ?>
          </ul>
        </div>
        <?php // echo $pagination;
        } ?>
      </div>

	</div>
</div>

<?php include("inc/footer.php"); ?>
