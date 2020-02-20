<?php session_start();

//Store posted values in the session variables
$_SESSION['tierSize1Select'] = $_POST['tierSize1Select'];
$_SESSION['flavour1Select'] = $_POST['flavour1Select'];
$_SESSION['sideDec1Select'] = $_POST['sideDec1Select'];
$_SESSION['topDec1Select'] = $_POST['topDec1Select'];
$_SESSION['decName1'] = $_POST['decName1'];
$_SESSION['decAge1'] = $_POST['decAge1'];
$_SESSION['decMessage1'] = $_POST['decMessage1'];
$_SESSION['tierSize2Select'] = $_POST['tierSize2Select'];
$_SESSION['flavour2Select'] = $_POST['flavour2Select'];
$_SESSION['sideDec2Select'] = $_POST['sideDec2Select'];
$_SESSION['tierSize3Select'] = $_POST['tierSize3Select'];
$_SESSION['flavour3Select'] = $_POST['flavour3Select'];
$_SESSION['sideDec3Select'] = $_POST['sideDec3Select'];
$_SESSION['tierSize4Select'] = $_POST['tierSize4Select'];
$_SESSION['flavour4Select'] = $_POST['flavour4Select'];
$_SESSION['sideDec4Select'] = $_POST['sideDec4Select'];
$_SESSION['tierSize5Select'] = $_POST['tierSize5Select'];
$_SESSION['flavour5Select'] = $_POST['flavour5Select'];
$_SESSION['sideDec5Select'] = $_POST['sideDec5Select'];
?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	
    <script>function myfunction() {
    var x = document.getElementById("figureSelect1").selectedIndex;
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
	  <h2>Your enquiry</h2>
	  <h3>How many figures would you like?</h3>
	  
	 <form name="contactform"  id="contactform" method="post">
	 <div class="row">
	 <div class="col-md-6">
	 <div class="form-group">
	  <label for="figureSelect1">How many figures?</label>
	 <select class="form-control" id="figureSelect1" name="figureSelect1">
	<option value="order_delivery_warning.php">0</option>
	<option value="order_figure_1.php">1</option>
	<option value="order_figure_2.php">2</option>
	<option value="order_figure_3.php">3</option>
	<option value="order_figure_4.php">4</option>
	</select>
	</div>
	</div>
	</div>
  <input class="btn btn-default btn-lg" type="button" onClick="goBack()"  value="Last page">
  <input class="btn btn-default btn-lg" type="submit" value="Next page" onclick="myfunction()"/>
</form>
<br>

    
	<?php include_once("../inc/footer.php"); ?>
	</div>
   
  </body>
</html>
