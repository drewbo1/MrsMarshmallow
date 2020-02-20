<?php include_once("../inc/header.php"); ?>

    <title>Mrs Marshmallow | Make an enquiry</title>

	     <script>function myfunction() {
    var x = document.getElementById("enquirySelect").selectedIndex;
    var action = document.getElementsByTagName("option")[x].value;
    if (action !== "") {
    document.getElementById("contactform").action = action;
    document.getElementById("contactform").submit();
    return true;
    }
    }
    </script>
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
			<li><a href="../index/balloons.php">Balloons</a></li>
            <li class="active"><a href="enquiry_select.php">Make an enquiry</a></li>
            </ul>
        </nav>
	  <br>
	  <br>
	  <h2>Your enquiry</h2>
	  <h3>Which products would you like to enquire about?</h3>
	  <br>
	 <form name="contactform" id="contactform" method="post">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	 <label for="enquirySelect">Which products? *</label>
	 <select class="form-control" id="enquirySelect" name="enquirySelect">
	<option value="cakes_availability.php">Cakes</option>
	<option value="cupcakes_availability.php">Cupcakes</option>
	<option value="order_info_3.php">Helium balloons</option>
	</select>
	</div>
	</div>
	 </div>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()" value="Last page">
  <input class="btn btn-default btn-lg" type="submit" value="Next page" onclick="myfunction()"/>
</form>
<br>


    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
	 
  </body>
</html>
