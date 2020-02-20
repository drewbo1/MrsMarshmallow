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
	  <h2>Your cake enquiry</h2>
	  <br>
	  <h4>The calendar shown below details the availability for cakes over the next six months. If the date you require is not shown as being available then please don't make an enquiry as it can not be fulfilled.</h4>
	 <br>
	 <div class="row">
	  <div class="col-md-12">
	 <iframe width="800px" height="400px" src="calendar/index.php"></iframe>
	 </div>
	 </div>
	 <br>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()" value="Last page">
  <input class="btn btn-default btn-lg" type="button" value="My date is available, please continue my enquiry" onClick="location.href='order_info.php'">
<br>
<br>


    
	<?php include_once("../inc/footer.php"); ?>

	</div>
   
	 
  </body>
</html>
