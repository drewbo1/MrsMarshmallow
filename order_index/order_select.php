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

	
    <script>function myfunction() {
    var x = document.getElementById("tierNumberSelect").selectedIndex;
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
	  <h3>How many tiers would you like?</h3>
	  <br>
	 <form name="contactform" id="contactform" method="post">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	 <label for="tierNumberSelect">Number of tiers? *</label>
	 <select class="form-control" id="tierNumberSelect" name="tierNumberSelect">
	<option value="order_tiers_1.php">1</option>
	<option value="order_tiers_2.php">2</option>
	<option value="order_tiers_3.php">3</option>
	<option value="order_tiers_4.php">4</option>
	<option value="order_tiers_5.php">5</option>
	</select>
	</div>
	</div>
	 <div class="col-md-6">
	 <div class="form-group">
	 <label for="cakeShapeSelect">Cake shape? *</label>
	 <select class="form-control" id="cakeShapeSelect" name="cakeShapeSelect">
	<option>Round</option>
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
