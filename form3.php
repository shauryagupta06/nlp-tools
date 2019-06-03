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
<div id="sl" class="container-fluid">
<div class="jumbotron">
     <div class="container">
        <h2>FIND TEH STEM AND LEMMA !</h2>
        <br>
        <h3>Enter a sentence and get the root words- stem and lemma</h3>
     </div>    
</div>
<div class="container">
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="rev">Sentence:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rev" placeholder="Enter your sentence" name="rev">
      </div>
    </div>
   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning">Root Words</button>
      </div>
    </div>
  </form>
</div>


 <?php
// define variables and set to empty values
$rev = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rev=$_POST["rev"];
  $rev = testd($rev);
}

function testd($data) {
  $data = trim($data);
  return $data;
}
?>

<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$read1 = shell_exec('stem.py "'.$rev.'"');
$read2 = shell_exec('lemma.py "'.$rev.'"');
?>


<div class="container">
  <div class="row">
        <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading"><h3 style ="font-family:verdana;">STEMMER</h3></div>
  <div class="panel-body">
     <strong><p id="demo" align="justify" style="font-size: 15px;"><?php echo $read1; ?></p>
     </strong>
  </div>
</div>
</div>

 <div class="col-md-6">
  
   <div class="panel panel-default">
  <div class="panel-heading"><h3 style ="font-family:verdana;">LEMMATIZER</h3></div>
  <div class="panel-body">
     <strong><p id="demo" align="justify" style="font-size: 15px;"><?php echo $read2; ?></p>
     </strong>
  </div>
</div>


</div>
</div>
</div>
</div>
</body>
</html>