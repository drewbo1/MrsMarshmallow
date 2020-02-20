<?php session_start();

//Store posted values in the session variables
$_SESSION['titleSelect'] = $_POST['titleSelect'];
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['phoneNumber'] = $_POST['phoneNumber'];
$_SESSION['emailAddress'] = $_POST['emailAddress'];


?>
<?php include_once("../inc/header.php"); ?>

    <title>Mrs Marshmallow | Make an enquiry</title>

	 
    <script src="../js/general.js"></script>
	<script src="../js/validation4.js"></script>
     
   
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
			<li><a href="../index/balloons.php">Balloons</a></li>
            <li class="active"><a href="enquiry_select.php">Make an enquiry</a></li>
            </ul>
        </nav>
	  <br>
	  <h2>Your enquiry</h2>
	  <br>
	  <h3>Cupcake enquiry information</h3>
	  
	  <form name="contactform" method="post" action="cupcakes_delivery.php" onSubmit="return Validate()">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	  <label for="cupcakesSelect">How many would you like? *</label>
	 <select class="form-control" id="cupcakesSelect" name="cupcakesSelect">
	<option>4</option>
	<option>6</option>
	<option>8</option>
	<option>12</option>
	<option>18</option>
	<option>24</option>
	<option>30</option>
	<option>36</option>
	<option>other amount</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="cuopcakeAmount">If other selected, how many would you like?</label>
    <input type="text" class="form-control" id="cupcakeAmount" name="cupcakeAmount" placeholder="Other amount">
  </div>
  </div>
	 <div class="col-md-6">
	<label for="cupcakeDetails1">What theme would you like for the decoration?</label>
	<textarea class="form-control" id="cupcakeDetails1" name="cupcakeDetails1" placeholder="What theme?"  rows="3"></textarea>
  </div>
  <div class="col-md-6">
	<label for="cupcakeDetails2">Any other information?</label>
	<textarea class="form-control" id="cupcakeDetails2" name="cupcakeDetails2" placeholder="Any other information? i.e. Type of celebration? Name of recipient?...."  rows="3"></textarea>
  </div>
	</div>
	<br>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()" value="Last page">
  <input class="btn btn-default btn-lg" type="submit" name="submitButton" value="Next page">
</form>

<br>
    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
  </body>
</html>
