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
	<script src="../js/validation3.js"></script>
       
  </head>

	  
   <body>
   <?php include_once("../analyticstracking.php") ?>
   <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
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
      </div>
	  <br>
	  <h2>Your enquiry</h2>
	  <br>
	  <h3>Helium balloons enquiry information</h3>
	  
	  <form name="contactform" method="post" action="balloons_delivery.php" onsubmit = "return Validate()">
	 <div class="row">
	 <div class="col-md-7">
	 <div class="form-group">
	  <label for="balloonSelect">What type of balloons would you like? *</label>
	 <select class="form-control" id="balloonSelect" name="balloonSelect">
	<option>Foil</option>
	<option>Latex</option>
	<option>Mixture</option>
	</select>
	</div>
	</div>
	 <div class="col-md-7">
	<label for="balloonDetails1">What balloons would you like?</label>
	<textarea class="form-control" id="balloonDetails1" name="balloonDetails1" placeholder="What balloons would you like?"  rows="3"></textarea>
  </div>
  <div class="col-md-7">
	<label for="balloonDetails2">Any other information?</label>
	<textarea class="form-control" id="balloonDetails2" name="balloonDetails2" placeholder="Any other information? i.e. Type of celebration? Name of recipient?...."  rows="3"></textarea>
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
