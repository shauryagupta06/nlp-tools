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
        <h2>REVIEW A MOVIE HERE!</h2>
        <br>
        <h3>Enter the name of the movie and your review, we will do an analysis for you</h3>
     </div>    
</div>
<div class="container">
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="topic">Movie Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="topic" placeholder="Enter movie name" name="topic">
      </div>
    </div>
    <center> OR </center>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rev">Your Review:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rev" placeholder="Enter your review" name="rev">
      </div>
    </div>
   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning">Sentiment Analysis</button>
      </div>
    </div>
  </form>
</div>


 <?php
// define variables and set to empty values
$topic = $rev = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$topic=$_POST["topic"];
    $rev=$_POST["rev"];
  $topic = test_input($topic);
  $rev = test_input($rev);
}

function test_input($data) {
  $data = trim($data);
  $data = strtoupper($data);
  return $data;
}
?>

<!--<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$read = explode(exec('sentiment.py "'.$rev.'"'));
?>-->

<?php 

$read = json_decode(exec('sentiment.py "'.$rev.'"'), true);
$pos = $read['pos'];
$neg = $read['neg'];
$posp = $pos*100;
$negp = $neg*100;
?>

<div class="container">
  <div class="row">
        <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading"><h3 style ="font-family:verdana;">RESULTS</h3></div>
  <div class="panel-body">
  	 <strong><p id="demo" align="justify" style="font-size: 15px;">FOR THE MOVIE <?php echo $topic; ?></p>
  	 <p id="demo" align="justify" style="font-size: 15px;">Positive: <?php echo $pos; ?></p>
     <p id="demo" align="justify" style="font-size: 15px;">Negative: <?php echo $neg; ?></p></strong>
  </div>
</div>
</div>

 <div class="col-md-6">
  
    <h2> SENTIMENT METER</h2>
<div class="progress">
  <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="0"
  aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $posp; ?>%">
    <?php echo $posp; ?>% Positive 
  </div>
</div>



<div class="progress">
  <div class="progress-bar progress-bar-danger active" role="progressbar" aria-valuenow="0"
  aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $negp; ?>%">
    <?php echo $negp; ?>% Negative
  </div>
</div>


</div>
</div>
</div>

</body>
</html>