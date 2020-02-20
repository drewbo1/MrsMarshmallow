<?php session_start();
//Store posted values in the session variables
$_SESSION['balloonSelect'] = $_POST['balloonSelect'];
$_SESSION['balloonDetails1'] = $_POST['balloonDetails1'];
$_SESSION['balloonDetails2'] = $_POST['balloonDetails2'];

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
	 <option value="balloons_order_delivery.php">Please deliver my order</option>
	 <option value="balloons_order_collection.php">I will collect my order</option>
	 </select>
	 </div>
	 </div>
	 	 </div>
         <br>
         <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
         <input class="btn btn-default btn-lg" type="submit" onClick="myfunction()" value="Next page">
		 
         </form>
			
		<br>
    
	<!-- FOOTER -->
      <?php include_once("../inc/footer.php"); ?>

	</div>
  </body>
</html>