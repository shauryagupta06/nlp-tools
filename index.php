<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>NLP!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
.jumbotron {
  background-color: #1abc9c;
  color: #fff;
  padding: 100px 25px;
  font-family: Montserrat, sans-serif;
}

.container-fluid {
  padding: 60px 50px;
}

.bg-grey {
  background-color: #e1e1e1;
}

.bg-lgrey {
  background-color: #f6f6f6;
}

.logo {
  color: #474e5d;
  width: 100%;
  height: 100%;
}

.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
}

.carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #1abc9c;
}

.carousel-indicators li {
  border-color: #1abc9c;
}

.carousel-indicators li.active {
  background-color: #1abc9c;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}
.panel {
    border: 1px solid #474e5d; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #474e5d;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #474e5d !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #474e5d;
    color: #fff;
  }
.navbar {
  margin-bottom: 0;
  background-color: #474e5d;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
  font-family: Montserrat, sans-serif;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #f4511e !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}

footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
 .bg-black { 
  background-color: #2f2f2f;
  color: #ffffff;
}
</style>
    <!-- Custom styles for this template go here -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">NLP SOLUTIONS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#preview">PREVIEW</a></li>
        <li><a href="#tools">TOOLS</a></li>
        <li><a href="#ts">TEXT SUMMARIZER</a></li>
        <li><a href="#sa">SENTIMENT ANALYSIS</a></li>
        <li><a href="#sl">STEMMER</a></li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
      <div class="container">
        <h1>Natural Language Processing</h1>
        <strong><p>A site for all your text processing needs !</p></stong><strong>
        <p> -Text summarization- provide a text and we will summarize it for you</p>
        <p> -Sentiment Analysis of your movie reviews</p>
        <p> -Stemmer and Lemmatizer - to get the root word </p>

      </div><!-- /container -->
    </div><!-- /jumbotron -->
    
    <div id="about" class="container-fluid text-center">
  <h2>This site provide simple NLP solutions</h2>
  <h3>We use NLTK for text processing</h3> 
</div>

<div id="preview" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4 text-center">
        <img src="globe.png" alt="Paris" width=100px height = 100px>
    </div>
    <div class="col-sm-8 text-center">
      <h2>World Class solutions</h2>
    </div>
  </div>
</div>

    <div id="tools" class="container-fluid text-center bg-lgrey">
  <h2 style="font-family:Montserrat;">TOOLS</h2>
  <h4 style="font-family:Montserrat;">What we have for you:</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="ts2.jpg" alt="Paris">
        <p><strong>Text Summarizer</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sa.jpg" alt="New York">
        <p><strong>Sentiment Analysis</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sl.jpg" alt="San Francisco">
        <p><strong>Stemmer and Lemmatizer</strong></p>
      </div>
    </div>
</div>
</div>

<center><h2>How it benifits</h2></center>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>“Problematic content can evolve over time,” <br>says program director Dr. Desmond Patton </h4>
    </div>
    <div class="item">
      <h4>“We're still at the very beginning in terms of this tech,” <br> CEO Alison Darcy told Inside AI’s Rob May.</h4>
    </div>
    <div class="item">
      <h4>At Columbia University, researchers have processed 2 million Tweets posted by 9,000 at-risk youth, looking for the answer to one question: How does language change as a teen comes closer and closer to getting violent?</h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<img src="main.jpg" style="width:100%">

<div id="ts" class="container-fluid">
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
</div>

<div id="sa" class="container-fluid">
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
  $topic = testd($topic);
  $rev = testd($rev);
}

function testd($data) {
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
</div>

<div id="sl" class="container-fluid">
<div class="jumbotron">
     <div class="container">
        <h2>FIND THE STEM AND LEMMA !</h2>
        <br>
        <h3>Enter a sentence and get the root words- stem and lemma</h3>
     </div>    
</div>
<div class="container">
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="rev2">Sentence:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rev2" placeholder="Enter your sentence" name="rev2">
      </div>
    </div>
   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning" onClick="#sl">Root Words</button>
      </div>
    </div>
  </form>
</div>


 <?php
// define variables and set to empty values
$rev2 = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rev2=$_POST["rev2"];
  $rev2 = testdd($rev2);
}

function testdd($data) {
  $data = trim($data);
  return $data;
}
?>

<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$read1 = shell_exec('stem.py "'.$rev2.'"');
$read2 = shell_exec('lemma.py "'.$rev2.'"');
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
   
  <footer class="container-fluid bg-black text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made By Shaurya Gupta </p> 
</footer> 

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
  </body>
</html>