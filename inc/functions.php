<?php

function get_catalog_count($category = null,$search = null) {
    $category = strtolower($category);
    include("connection.php");

    try {
        $sql = "SELECT COUNT(id) FROM Products";
        if (!empty($search)) {
          $result = $db->prepare(
            $sql
            . " WHERE name LIKE ?"
          );
          $result->bindValue(1,'%'.$search.'%',PDO::PARAM_STR);
        } else if (!empty($category)) {
          $result = $db->prepare(
            $sql
            . " WHERE LOWER(name) = ?"
          );
          $result->bindParam(1,$category,PDO::PARAM_STR);
        } else {
          $result = $db->prepare($sql);
        }
        $result->execute();
    } catch (Exception $e) {
      echo "bad query";
    }
  
  $count = $result->fetchColumn(0);
  return $count;
}

function all_products_array() {
	include("connection.php");
	
		try {
		$results = $db->query("SELECT name, price, unit FROM Products;");
	} catch (Exception $e) {
		echo "Data could not be retrieved from the database.";
		exit;
	}
	
	$products = $results->fetchAll();
	return $products;
}

function one_product_array($id) {
	include("connection.php");
	
		try {
		$results = $db->query(
			"SELECT name, price, unit FROM Products
			WHERE id = $id;"
		);
	} catch (Exception $e) {
		echo "Data could not be retrieved from the database.";
		exit;
	}
	
	$products = $results->fetchAll();
	return $products;
}

function get_item_html($item) {
    $output = "<li>"
        . $item["name"] . " $"
        . $item["price"] . "/" 
        . $item["unit"] . "</li>";
    return $output;
}

function get_products($product,$category) {
	$output = array();
    
    foreach ($product as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["name"];
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}

function search_catalog_array($search, $limit = null, $offset = 0) {
    include("connection.php");
    
    try {
       $sql = "SELECT name, price, unit 
         FROM Products
         WHERE name LIKE ?";
       if (is_integer($limit)) {
          $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
         $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
          $results->bindParam(2,$limit,PDO::PARAM_INT);
          $results->bindParam(3,$offset,PDO::PARAM_INT);
       } else {
         $results = $db->prepare($sql);
         $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
       }
       $results->execute();
    } catch (Exception $e) {
       echo "Unable to retrieve results";
			var_dump($e);
       exit;
    }
    
    $product = $results->fetchAll();
    return $product;
}