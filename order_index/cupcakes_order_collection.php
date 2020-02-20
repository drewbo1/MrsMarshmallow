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
			<li><a href="../index/balloons.php">Balloons</a></li>
            <li class="active"><a href="enquiry_select.php">Make an enquiry</a></li>
            </ul>
        </nav>
	  <br>
	  <h2>Your enquiry</h2>
	  <h3>Collection information</h3>
	 <form name="contactform" method="post" action="cupcakes_submit.php" onSubmit="return ValidateDate()">
	 <div class="row">
	 <div class="col-md-9">
     <h4>When do you want to collect your order?</h4>
     </div>
	  <div class="col-md-8">
	 <iframe width="700px" height="350px" src="calendar/index.php"></iframe>
	 </div>
     <div class="col-md-6">
              <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="deliveryDate">Date</label>
        <input class="form-control" id="deliveryDate" name="deliveryDate" readOnly="readOnly" placeholder="DD/MM/YYYY">
      </div>
    </div>
    <div class="col-md-6">
	 <div class="form-group">
	 <label for="collectionTimeSelect">What time would you like to collect your order?</label>
	 <select class="form-control" id="collectionTimeSelect" name="collectionTimeSelect">
	 <option>10:00-12:00</option>
	 <option>19:00-21:00</option>
	 </select>
	 </div>
	 </div>
       </div>
     
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
  <input class="btn btn-default btn-lg" type="submit" name="submitButton" value="Submit enquiry">
</form>
	<br>
    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
  </body>
</html>
