<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form for summary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
     <div class="container">
        <h2>YOUR OWN TEXT SUMMARIZER!</h2>
        <br>
        <h3>Enter the topic and get Wikipedia page summary</h3>
     </div>    
</div>
<div class="container">
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="topic">Topic:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="topic" placeholder="Enter wikipedia topic" name="topic">
      </div>
    </div>
    <center> OR </center>
    <div class="form-group">
      <label class="control-label col-sm-2" for="url">URL:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="url" placeholder="Enter url" name="url">
      </div>
    </div>
   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning">Get Summary</button>
      </div>
    </div>
  </form>
</div>


 <?php
// define variables and set to empty values
$topic = $url = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$topic=$_POST["topic"];
    $url=$_POST["url"];
  $topic = test_input($topic);
  $url = test_input($url);
}

function test_input($data) {
  $data = trim($data);
  return $data;
}
?>

<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$read = shell_exec('summary.py "'.$topic.'"');
$read2 = shell_exec('summary2.py "'.$url.'"');

?>



<div class="panel panel-default">
	<div class="container">
  <div class="panel-heading"><h3 style ="font-family:verdana;">Summary</h3></div>
  <div class="panel-body">
  	 <p id="demo" align="justify"><?php echo $read; ?></p>
  	 <p id="demo" align="justify"><?php echo $read2; ?></p>
  </div>
</div>
</div>

</body>
</html>