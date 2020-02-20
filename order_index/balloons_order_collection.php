<?php session_start();
?>
<?php include_once("../inc/header.php"); ?>

    <title>Mrs Marshmallow | Make an enquiry</title>

	<script src="../js/general.js"></script>
	<script>
	function ValidateDate()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
pattern = (/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(2[0-9][0-9][0-9])/);
	dateElement = document.getElementById("collectionDate");
	if (pattern.test(dateElement.value))
    {
		dateElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        dateElement.style.backgroundColor = "#FF7433";
		alert("Date must be of the format DD/MM/YYYY.");
	    return false
	}	
}
</script>
	<!-- Bootstrap Date-Picker Plugin -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="collectionDate"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
		startDate: new Date(),
      };
      date_input.datepicker(options);
    })
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

	  <br>
	  <h2>Your enquiry</h2>
	  <h3>Collection information</h3>
	 <form name="contactform" method="post" action="balloons_submit.php" onSubmit="return ValidateDate()">
	 <div class="row">
	 <div class="col-md-9">
     <h4>When do you want to collect your order?</h4>
     </div>
     <div class="col-md-6">
              <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="collectionDate">Date</label>
        <input class="form-control" id="collectionDate" name="collectionDate" placeholder="DD/MM/YYYY">
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
    
	<?php include_once("../inc/footer.php"); ?>
	
	</div>
  </body>
</html>
