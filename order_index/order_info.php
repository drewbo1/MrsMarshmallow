<?php session_start();?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	

    <script src ="../js/validation2.js"></script>
    	
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
	  <h2>Fill in details to make an enquiry</h2>
	  <br>
	  <h3>Contact details</h3>
	  <br>
	  
	 <form action="order_select.php" method="post" id="infoForm" name="infoForm" onsubmit = "return Validate()">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	  <label for="titleSelect">Title *</label>
	 <select class="form-control" id="titleSelect" value="<?php echo $_SESSION['titleSelect']; ?>" name="titleSelect">
	<option>Mr</option>
	<option>Mrs</option>
	<option>Miss</option>
	<option>Ms</option>
	<option>Dr</option>
	</select>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
    <label for="firstName">First name *</label>
    <input class="form-control" id="firstName" value="<?php echo $_SESSION['firstName']; ?>" name="firstName" placeholder="First name">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="lastName">Last name *</label>
    <input class="form-control" id="lastName" value="<?php echo $_SESSION['lastName']; ?>" name="lastName" placeholder="Last name">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="phoneNumber">Phone number *</label>
    <input class="form-control" id="phoneNumber" value="<?php echo $_SESSION['phoneNumber']; ?>" name="phoneNumber" placeholder="Phone number">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="emailAddress">Email address *</label>
    <input class="form-control" id="emailAddress" value="<?php echo $_SESSION['emailAddress']; ?>" name="emailAddress" placeholder="Email address">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="confirmEmailAddress">Confirm email address *</label>
    <input class="form-control" id="confirmEmailAddress" value="<?php echo $_SESSION['confirmEmailAddress']; ?>" name="confirmEmailAddress" placeholder="Confirm email address">
  </div>
  </div>
  </div>
	<input class="btn btn-default btn-lg" type="submit" name="submitButton" value="Next">
	</form>
	<br>
	<?php include_once("../inc/footer.php"); ?>
   </div>
 </body>
</html>
