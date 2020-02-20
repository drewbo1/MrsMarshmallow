<?php session_start();

//Store posted values in the session variables
$_SESSION['figureSelect1'] = $_POST['figureSelect1'];

?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	
    <script src="../js/general.js"></script>
	<script src="../js/figurevalidation.js"></script>
    
   
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
	  <h3>Single figure information</h3>
	 <form name="contactform" method="post" action="order_delivery_warning.php" onSubmit="return Validate()">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	  <label for="genderSelect1">Gender?</label>
	 <select class="form-control" id="genderSelect1" name="genderSelect1" required>
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="hairSelect1">Hair colour?</label>
	 <select class="form-control" id="hairSelect1" name="hairSelect1">
	<option>Black</option>
	<option>White</option>
	<option>Grey</option>
	<option>Yellow</option>
	<option>Brown</option>
	<option>Chestnut</option>
	<option>Bald</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="glassesSelect1">Glasses?</label>
	 <select class="form-control" id="glassesSelect1" name="glassesSelect1">
	<option>No</option>
	<option>Yes</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="hairStyle1">Hair style</label>
    <input class="form-control" id="hairStyle1" name="hairStyle1" placeholder="Hair style">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="skinTone1">Skin tone</label>
    <input class="form-control" id="skinTone1" name="skinTone1" placeholder="Skin tone">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="outfit1">Outfit</label>
    <input class="form-control" id="outfit1" name="outfit1" placeholder="Outfit">
  </div>
  </div>
  <div class="col-md-6">
	<label for="otherDetails1">Other details?</label>
	<textarea class="form-control" id="otherDetails1" name="otherDetails1" placeholder="Other details"  rows="3"></textarea>
  </div>
  </div>
  <br>
  
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
  <input class="btn btn-default btn-lg" type="submit" name="submitButton" value="Next page">
  
</form>

<br>
    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   </div>
  </body>
</html>
