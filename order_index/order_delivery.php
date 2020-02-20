<?php session_start();
?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>
	
	     <script src="../js/general.js"></script>
	<script src="../js/deliveryvalidation.js"></script>
    
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
	  <h3>Delivery information</h3>
	 <form name="contactform" method="post" action="submit.php" onSubmit="return Validate()">
	 <div class="row">
	 <div class="col-md-9">
     <h4>When and where do you want your order delivered?</h4>
     </div>
	  <div class="col-md-8">
	 <iframe width="700px" height="350px" src="calendar/index.php"></iframe>
	 </div>
        <div class='col-sm-7'>
              <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="deliveryDate">Date *</label>
        <input class="form-control" id="deliveryDate" readOnly="readOnly" name="deliveryDate" placeholder="DD/MM/YYYY">
      </div>
    </div>
    <div class="col-md-7">
	 <div class="form-group">
	 <label for="deliveryTimeSelect">What time would you like your order delivered? *</label>
	 <select class="form-control" id="deliveryTimeSelect" name="deliveryTimeSelect" required>
	 <option>09:00-15:00</option>
	 <option>15:00-21:00</option>
	 </select>
	 </div>
	 </div>
	  <div class="col-md-9">
     <h4>Address for delivery?</h4>
     </div>
     <div class="col-md-7">
  <div class="form-group">
     <label for="businessName">Business name</label>
    <input class="form-control" id="businessName" name="businessName" placeholder="Business name">
  </div>
  </div>
  <div class="col-md-7">
  <div class="form-group">
    <label for="streetNumber">Street/Road number *</label>
    <input class="form-control" id="streetNumber" name="streetNumber" placeholder="Street/Road number">
  </div>
  </div>
  <div class="col-md-7">
  <div class="form-group">
    <label for="streetName">Street/Road name *</label>
    <input class="form-control" id="streetName" name="streetName" placeholder="Street/Road name">
  </div>
  </div>
  <div class="col-md-7">
  <div class="form-group">
    <label for="town">Town *</label>
    <input class="form-control" id="town" name="town" placeholder="Town">
  </div>
  </div>
  <div class="col-md-7">
  <div class="form-group">
    <label for="postcode">Postcode *</label>
    <input class="form-control" id="postcode" name="postcode" placeholder="Postcode">
  </div>
  </div>
  <div class="col-md-7">
  <div class="form-group">
    <label for="deliveryPhoneNumber">Phone number *</label>
    <input class="form-control" id="deliveryPhoneNumber" name="deliveryPhoneNumber" placeholder="Phone number">
  </div>
  </div>
  <div class="col-md-7">
	<label for="otherDeliveryDetails">Any other delivery information: e.g. A contact name at your venue? The reservation name? Time of event? etc</label>
	<textarea class="form-control" id="otherDeliveryDetails" name="otherDeliveryDetails" placeholder="Any additional delivery information...."  rows="3"></textarea>
  </div>
  </div>
  <br>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
  <input class="btn btn-default btn-lg" type="submit" name="submitButton"  value="Submit enquiry">
</form>
<br>
    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
  </body>
</html>
