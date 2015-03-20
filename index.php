<?php
$content = $_POST['content'];
$regexp = $_POST['regexp'];

if($content && $regexp){
  $regexp = str_replace('/','\/',$regexp);
  @preg_match_all('/'.trim($regexp).'/', $content, $matches);
  $result = @implode("\n", $matches[0]);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

</head>
<style>
  body{
    text-align: center;
  }
  .page{
    padding: 0 300px;
  }
  pre{
    text-align: left;
  }
</style>
<body>
<div class="container">
<div class="page">
<h1>Grab substrings with regexp</h1>
<br>

<?php
if(!empty($result)){
  echo "<pre>{$result}</pre>";
} else {
  echo "<div class=\"alert alert-danger\">Bad regexp or nothing grabbed</div>";
}
?>

<br>
<form action="" role="form" method="post">
    <input type="text" class="form-control" name="regexp" id="regexp" placeholder="regexp">
    <br>
    <textarea id="content" name="content" class="form-control" rows="14" placeholder="content to search through"></textarea>
    <br>
    <input type="submit" class="btn btn-default">
</form>

</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(document).ready(function(){

});
</script>

</body>
</html>
