<?php session_start();

//Store posted values in the session variables
$_SESSION['cakeShapeSelect'] = $_POST['cakeShapeSelect'];
$_SESSION['tierNumberSelect'] = $_POST['tierNumberSelect'];

?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	
    <script src="../js/tiersvalidation.js"></script>
    <script src="../js/general.js"></script>

      
  </head>

	  
   <body>
   <?php include_once("../analyticstracking.php") ?>
   <div class="container">

      <?php include_once("../inc/masthead.php"); ?>
        <nav>
          <ul class="nav nav-justified">
		  <li><a href="../index.php">Home</a></li>
			<li><a href="../index/about_index.php">About</a></li>
            <li><a href="../index/services_index.php">Services</a></li>
            <li><a href="../index/gallery_index.php">Gallery</a></li>
            <li><a href="../index/information_index.php">Information</a></li>
            <li class="active"><a href="enquiry_select.php">Make an enquiry</a></li>
            </ul>
        </nav>
	  <br>
	  <h2>Your enquiry</h2>
	  <h3>Single tier information</h3>
	  
	  <form name="contactform" method="post" action="order_figure_select.php" onSubmit="return Validate()">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	  <label for="tierSize1Select">Size? *</label>
	 <select class="form-control" id="tierSize1Select" name="tierSize1Select">
	<option> </option> 
	<option>8 inch</option>
	<option>9 inch</option>
	<option>10 inch</option>
	<option>11 inch</option>
	<option>12 inch</option>
	<option>13 inch</option>
	<option>14 inch</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="flavour1Select">Flavour? *</label>
	 <select class="form-control" id="flavour1Select" name="flavour1Select">
	<option>Madeira cake filled with strawberry jam and vanilla frosting</option>
	<option>Chocolate cake filled with chocolate frosting</option>
	<option>Toffee cake filled with toffee sauce and vanilla frosting</option>
	<option>Ginger cake filled with vanilla frosting</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="sideDec1Select">Side decoration? *</label>
	 <select class="form-control" id="sideDec1Select" name="sideDec1Select">
	<option>Plain, edged with ribbon</option>
	<option>Detailing</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="topDec1Select">Top decoration? *</label>
	 <select class="form-control" id="topDec1Select" name="topDec1Select">
	<option>No</option>
	<option>Yes</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="decName1">Name</label>
    <input class="form-control" id="decName1" name="decName1" placeholder="Name">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="decAge1">Age</label>
    <input class="form-control" id="decAge1" name="decAge1" placeholder="Age">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="decMessage1">Message</label>
    <input class="form-control" id="decMessage1" name="decMessage1" placeholder="Message">
  </div>
  </div>
	</div>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()" value="Last page">
  <input class="btn btn-default btn-lg" type="submit" name="submitButton" value="Next page">
</form>
<br>


    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
  </body>
</html>
