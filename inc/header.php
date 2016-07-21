<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="CSS/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>

	<div class="header"> 
		
		<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Twin Ridge Bees</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="/index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

		</div>
		
		<div class="wide">
			<div class="col-xs-5 line"><hr></div>
			<div class="col-xs-2 logo">Logo</div>
			<div class="col-xs-5 line"><hr></div>
		</div>

	</div>
	
	  <div class="search">
  <form method="get" action="products.php">
    <label for="s">Search:</label>
    <input type="text" name="s" id="s" />
    <input type="submit" value="go" />  
  </form>
  </div>

	<div id="content">