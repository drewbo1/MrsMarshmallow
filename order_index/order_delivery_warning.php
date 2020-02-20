<?php session_start();
//Store posted values in the session variables
$_SESSION['genderSelect1'] = $_POST['genderSelect1'];
$_SESSION['hairSelect1'] = $_POST['hairSelect1'];
$_SESSION['glassesSelect1'] = $_POST['glassesSelect1'];
$_SESSION['hairStyle1'] = $_POST['hairStyle1'];
$_SESSION['skinTone1'] = $_POST['skinTone1'];
$_SESSION['outfit1'] = $_POST['outfit1'];
$_SESSION['otherDetails1'] = $_POST['otherDetails1'];
$_SESSION['genderSelect2'] = $_POST['genderSelect2'];
$_SESSION['hairSelect2'] = $_POST['hairSelect2'];
$_SESSION['glassesSelect2'] = $_POST['glassesSelect2'];
$_SESSION['hairStyle2'] = $_POST['hairStyle2'];
$_SESSION['skinTone2'] = $_POST['skinTone2'];
$_SESSION['outfit2'] = $_POST['outfit2'];
$_SESSION['otherDetails2'] = $_POST['otherDetails2'];
$_SESSION['genderSelect3'] = $_POST['genderSelect3'];
$_SESSION['hairSelect3'] = $_POST['hairSelect3'];
$_SESSION['glassesSelect3'] = $_POST['glassesSelect3'];
$_SESSION['hairStyle3'] = $_POST['hairStyle3'];
$_SESSION['skinTone3'] = $_POST['skinTone3'];
$_SESSION['outfit3'] = $_POST['outfit3'];
$_SESSION['otherDetails3'] = $_POST['otherDetails3'];
$_SESSION['genderSelect4'] = $_POST['genderSelect4'];
$_SESSION['hairSelect4'] = $_POST['hairSelect4'];
$_SESSION['glassesSelect4'] = $_POST['glassesSelect4'];
$_SESSION['hairStyle4'] = $_POST['hairStyle4'];
$_SESSION['skinTone4'] = $_POST['skinTone4'];
$_SESSION['outfit4'] = $_POST['outfit4'];
$_SESSION['otherDetails4'] = $_POST['otherDetails4'];
?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	

    <script src="../js/general.js"></script>
    <script>function myfunction() {
    var x = document.getElementById("deliverySelect").selectedIndex;
    var action = document.getElementsByTagName("option")[x].value;
    if (action !== "") {
    document.getElementById("contactform").action = action;
    document.getElementById("contactform").submit();
    return true;
    }
    }
    </script>

       
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
	  <h2>Delivery information</h2>
	  <br>
	  <h4>(The cost for delivery is £1 per mile for the return trip from BT30 9FB.)</h4>
	  <br>
	 <form name="contactform" id="contactform" method="post">
	 <div class="row">
	 <div class="col-md-9">
	 <div class="form-group">
	 <label for="deliverySelect">Collection or delivery?</label>
	 <select class="form-control" id="deliverySelect" name="deliverySelect">
	 <option value="order_delivery.php">Please deliver my order</option>
	 <option value="order_collection.php">I will collect my order</option>
	 </select>
	 </div>
	 </div>
	 <div class="col-md-12">
         <h4>Please be aware that if you have selected 3 or more tiers you must have your cake delivered!</h4>
         </div>
		 </div>
         <br>
         <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
         <input class="btn btn-default btn-lg" type="submit" onClick="myfunction()" value="Next page">
		 
         </form>
<br>

    
	<?php include_once("../inc/footer.php"); ?>

	
   </div>
  </body>
</html>