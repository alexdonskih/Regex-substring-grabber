<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="favicon.ico" type="image/icon">
</head>
<body>
<!-- your html here -->
<div class="container">
<div class="page">
<h1>Grab substrings with regex</h1>
<br>

<?php
if(!empty($result)){
  echo "<pre>{$result}</pre>";
} else {
  echo "<div class=\"alert alert-danger\">Bad regex or nothing grabbed</div>";
}
?>

<br>
<form action="" role="form" method="post">
    <input type="text" class="form-control" name="regex" id="regex" placeholder="regex">
    <br>
    <textarea id="content" name="content" class="form-control" rows="14" placeholder="content to search through"></textarea>
    <br>
    <input type="submit" class="btn btn-default">
</form>

</div>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>