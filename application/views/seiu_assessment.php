<html>
<head>
	<title>seiu Assessment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
	<script src="assets/ajax.js"></script>
</head>
<body class="container">
	<H3>Create Information</h3>
	<form action="add" class="form-inline" method="post">
  		<div class="form-group">
    		<label for="name">Name:</label>
    		<input type="text" class="form-control" id="name" name="name" placeholder="John Smith">
  		</div>
  		<div class="form-group">
    		<label for="age">Age:</label>
    		<input type="text" class="form-control" id="age" name="age" placeholder="22">
  		</div>
 		<button type="submit" class="btn btn-success">Create</button>
	</form>		
	<h3>Search for Information</h3>
	<form class="form">
		<input type="text" class="form-control" placeholder="Search for..." name="search_key">
	</form>
	<div id ="table_spot">
		<?php require('application/views/partials/table_partial.php') ?>
	</div>
</body>
</html>