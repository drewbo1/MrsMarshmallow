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
	  <h3>Three figures information</h3>
	  
	 <form name="contactform" method="post" action="order_delivery_warning.php" onSubmit="return Validate()">
	 <div class="row">
	 <div class="col-md-9">
     <h4>First figure</h4>
     </div>
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
    <input type="text" class="form-control" id="hairStyle1" name="hairStyle1" placeholder="Hair style">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="skinTone1">Skin tone</label>
    <input type="text" class="form-control" id="skinTone1" name="skinTone1" placeholder="Skin tone">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="outfit1">Outfit</label>
    <input type="text" class="form-control" id="outfit1" name="outfit1" placeholder="Outfit">
  </div>
  </div>
  <div class="col-md-6">
	<label for="otherDetails1">Other details?</label>
	<textarea class="form-control" id="otherDetails1" name="otherDetails1" placeholder="Other details"  rows="3"></textarea>
  </div>
  <div class="col-md-9">
  <h4>Second figure</h4>
  </div>
  <br>
  <div class="col-md-6">
	 <div class="form-group">
	  <label for="genderSelect2">Gender?</label>
	 <select class="form-control" id="genderSelect2" name="genderSelect2" required>
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="hairSelect2">Hair colour?</label>
	 <select class="form-control" id="hairSelect2" name="hairSelect2">
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
	  <label for="glassesSelect2">Glasses?</label>
	 <select class="form-control" id="glassesSelect2" name="glassesSelect2">
	<option>No</option>
	<option>Yes</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="hairStyle2">Hair style</label>
    <input type="text" class="form-control" id="hairStyle2" name="hairStyle2" placeholder="Hair style">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="skinTone2">Skin tone</label>
    <input type="text" class="form-control" id="skinTone2" name="skinTone2" placeholder="Skin tone">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="outfit2">Outfit</label>
    <input type="text" class="form-control" id="outfit2" name="outfit2" placeholder="Outfit">
  </div>
  </div>
  <div class="col-md-6">
	<label for="otherDetails2">Other details?</label>
	<textarea class="form-control" id="otherDetails2" name="otherDetails2" placeholder="Other details"  rows="3"></textarea>
  </div>
  <div class="col-md-9">
  <h4>Third figure</h4>
  </div>
  <br>
  <div class="col-md-6">
	 <div class="form-group">
	  <label for="genderSelect3">Gender?</label>
	 <select class="form-control" id="genderSelect3" name="genderSelect3" required>
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	 <div class="form-group">
	  <label for="hairSelect3">Hair colour?</label>
	 <select class="form-control" id="hairSelect3" name="hairSelect3">
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
	  <label for="glassesSelect3">Glasses?</label>
	 <select class="form-control" id="glassesSelect3" name="glassesSelect3">
	<option>No</option>
	<option>Yes</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="hairStyle3">Hair style</label>
    <input type="text" class="form-control" id="hairStyle3" name="hairStyle3" placeholder="Hair style">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="skinTone3">Skin tone</label>
    <input type="text" class="form-control" id="skinTone3" name="skinTone3" placeholder="Skin tone">
  </div>
  </div>
  <div class="col-md-6">
	<div class="form-group">
    <label for="outfit3">Outfit</label>
    <input type="text" class="form-control" id="outfit3" name="outfit3" placeholder="Outfit">
  </div>
  </div>
  <div class="col-md-6">
	<label for="otherDetails3">Other details?</label>
	<textarea class="form-control" id="otherDetails3" name="otherDetails3" placeholder="Other details"  rows="3"></textarea>
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