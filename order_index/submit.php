<?php session_start();
$_SESSION['deliveryDate'] = $_POST['deliveryDate'];
$_SESSION['deliveryTimeSelect'] = $_POST['deliveryTimeSelect'];
$_SESSION['businessName'] = $_POST['businessName'];
$_SESSION['streetNumber'] = $_POST['streetNumber'];
$_SESSION['streetName'] = $_POST['streetName'];
$_SESSION['town'] = $_POST['town'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['deliveryPhoneNumber'] = $_POST['deliveryPhoneNumber'];
$_SESSION['otherDeliveryDetails'] = $_POST['otherDeliveryDetails'];
$_SESSION['collectionDate'] = $_POST['collectionDate'];
$_SESSION['collectionTimeSelect'] = $_POST['collectionTimeSelect'];
?>
<?php include_once("../inc/header.php"); ?>
    <title>Mrs Marshmallow | Make an enquiry</title>

	    <script>function myfunction() {
    var x = document.getElementById("productSelect").selectedIndex;
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
	  <br>
	  <h2>Your enquiry has been sent</h2>
	  <br>
	  <h3>A copy of the information you submitted has been emailed to you at the address you gave.</h3>
	  <br>
	  <form name="contactform" id="contactform" method="post">
	  <div class="row">
	  <div class="col-md-6">
	 <div class="form-group">
	 <label for="productSelect">Do you want to enquire about other products? *</label>
	 <select class="form-control" id="productSelect" name="productSelect">
	<option value="order_info_2.php">Cupcakes</option>
	<option value="order_info_3.php">Helium balloons</option>
	<option value="../index.php">No thanks</option>
	</select>
	</div>
	</div>
	</div>
	 <input class="btn btn-default btn-lg" type="submit" value="Next" onclick="myfunction()"/>
	 
</form>
	 
<?php  
$titleSelect = $_SESSION['titleSelect']; 
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$phoneNumber = $_SESSION['phoneNumber'];
$emailAddress = $_SESSION['emailAddress'];   
$cakeShapeSelect = $_SESSION['cakeShapeSelect'];
$tierNumberSelect = $_SESSION['tierNumberSelect'];   
$tierSize1Select = $_SESSION['tierSize1Select'];
$flavour1Select = $_SESSION['flavour1Select'];
$sideDec1Select = $_SESSION['sideDec1Select'];
$topDec1Select = $_SESSION['topDec1Select'];
$decName1 = $_SESSION['decName1'];
$decAge1 = $_SESSION['decAge1'];
$decMessage1 = $_SESSION['decMessage1'];
$tierSize2Select = $_SESSION['tierSize2Select'];
$flavour2Select = $_SESSION['flavour2Select'];
$sideDec2Select = $_SESSION['sideDec2Select'];
$tierSize3Select = $_SESSION['tierSize3Select'];
$flavour3Select = $_SESSION['flavour3Select'];
$sideDec3Select = $_SESSION['sideDec3Select'];
$tierSize4Select = $_SESSION['tierSize4Select'];
$flavour4Select = $_SESSION['flavour4Select'];
$sideDec4Select = $_SESSION['sideDec4Select'];
$tierSize5Select = $_SESSION['tierSize5Select'];
$flavour5Select = $_SESSION['flavour5Select'];
$sideDec5Select = $_SESSION['sideDec5Select'];   
$figureSelect1 = $_SESSION['figureSelect1'];   
$genderSelect1 = $_SESSION['genderSelect1'];
$hairSelect1 = $_SESSION['hairSelect1'];
$glassesSelect1 = $_SESSION['glassesSelect1'];
$hairStyle1 = $_SESSION['hairStyle1'];
$skinTone1 = $_SESSION['skinTone1'];
$outfit1 = $_SESSION['outfit1'];
$otherDetails1 = $_SESSION['otherDetails1'];
$genderSelect2 = $_SESSION['genderSelect2'];
$hairSelect2 = $_SESSION['hairSelect2'];
$glassesSelect2 = $_SESSION['glassesSelect2'];
$hairStyle2 = $_SESSION['hairStyle2'];
$skinTone2 = $_SESSION['skinTone2'];
$outfit2 = $_SESSION['outfit2'];
$otherDetails2 = $_SESSION['otherDetails2'];
$genderSelect3 = $_SESSION['genderSelect3'];
$hairSelect3 = $_SESSION['hairSelect3'];
$glassesSelect3 = $_SESSION['glassesSelect3'];
$hairStyle3 = $_SESSION['hairStyle3'];
$skinTone3 = $_SESSION['skinTone3'];
$outfit3 = $_SESSION['outfit3'];
$otherDetails3 = $_SESSION['otherDetails3'];
$genderSelect4 = $_SESSION['genderSelect4'];
$hairSelect4 = $_SESSION['hairSelect4'];
$galssesSelect4 = $_SESSION['glassesSelect4'];
$hairStyle4 = $_SESSION['hairStyle4'];
$skinTone4 = $_SESSION['skinTone4'];
$outfit4 = $_SESSION['outfit4'];
$otherDetails4 = $_SESSION['otherDetails4'];
$deliveryDate = $_SESSION['deliveryDate'];
$deliveryTimeSelect = $_SESSION['deliveryTimeSelect'];
$businessName = $_SESSION['businessName'];
$streetNumber = $_SESSION['streetNumber'];
$streetName = $_SESSION['streetName'];
$town = $_SESSION['town'];
$postcode = $_SESSION['postcode'];
$deliveryPhoneNumber = $_SESSION['deliveryPhoneNumber'];
$otherDeliveryDetails = $_SESSION['otherDeliveryDetails'];
$collectionDate = $_SESSION['deliveryDate'];
$collectionTimeSelect = $_SESSION['collectionTimeSelect'];
?>
<?php
$email_message = '<body style="margin: 0; padding: 0;">';

$email_message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';

$email_message .= '<tr>';

$email_message .= '<td>';

$email_message .= '<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">';

$email_message .= '<tr>';

$email_message .= '<td>';

$email_message .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';

$email_message .= '<tr>';

$email_message .= '<td width="100" valign="top">';

$email_message .= "<img src='http://www.mrsmarshmallow.co.uk/Images/Logo.png' style='width:160px;height:200px' alt='Mrs Marshmallow logo'>";

$email_message .= '</td>';

$email_message .= '<td width="500" valign="top" style="padding: 10 0 10 10;">';

$email_message .= '<h1>Cakes, Cupcakes and Balloons</h1>';
  
$email_message .= '</td>';

$email_message .= '</tr>';

$email_message .= '</table><br>';

$email_message .= '<tr>';

$email_message .= '<td width="600" valign="top">';

$email_message .= "<h2><strong>Thank you for your enquiry.</strong></h2><br>";

$email_message .= '</td>';

$email_message .= '</tr>';

$email_message .= '<tr>';

$email_message .= '<td width="600" valign="top">';

$email_message .= "<h4><strong>The details that you entered are included below.</strong></h4><br>";

$email_message .= '</td>';

$email_message .= '</tr>';

$email_message .= '</table>';

$email_message .= '<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">';

$email_message .= '<tr>';

$email_message .= '<td>';
 
     function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
	
	$email_message .= "<br>";
    
    $email_message .= "<h2>Your details</h2>";
 
    $email_message .= "Title: ".clean_string($titleSelect)."<br>"; 
 
    $email_message .= "First Name: ".clean_string($firstName)."<br>";
 
    $email_message .= "Last Name: ".clean_string($lastName)."<br>";
 
    $email_message .= "Phone number: ".clean_string($phoneNumber)."<br>";
 
    $email_message .= "Email: ".clean_string($emailAddress)."<br>";
	
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
    
    $email_message .= "<h2>Cake shape</h2><br>";
    
    $email_message .= "Cake shape: ".clean_string($cakeShapeSelect)."<br>"; 
	if ($tierNumberSelect === "order_tiers_1.php"){
    $email_message .= "Number of tiers: "."1"."<br>";
    }
	else {
		if ($tierNumberSelect === "order_tiers_2.php"){
		$email_message .= "Number of tiers: "."2"."<br>";	
		}
		else {
			if ($tierNumberSelect === "order_tiers_3.php"){
		    $email_message .= "Number of tiers: "."3"."<br>";
			}
			else {
				if ($tierNumberSelect === "order_tiers_4.php"){
		    $email_message .= "Number of tiers: "."4"."<br>";
			    }
				else {
					if ($tierNumberSelect === "order_tiers_5.php"){
		            $email_message .= "Number of tiers: "."5"."<br>";
			        }
				}
			}
		}
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    $email_message .= "<h2>Bottom tier information</h2><br>";
 
    $email_message .= "Bottom tier size: ".clean_string($tierSize1Select)."<br>";
 
    $email_message .= "Bottom tier flavour: ".clean_string($flavour1Select)."<br>";
 
    $email_message .= "Bottom tier side decoration: ".clean_string($sideDec1Select)."<br>";
	
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($tierSize2Select)){
    $email_message .="<h2>Second tier information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($tierSize2Select)){
    $email_message .= "Second tier size: ".clean_string($tierSize2Select)."<br>";
	}
	else {
	$email_message .= "";
	}
	if (isset($flavour2Select)){
    $email_message .= "Second tier flavour: ".clean_string($flavour2Select)."<br>";
	}
	else {
	$email_message .= "";
	}
	if (isset($sideDec2Select)){
    $email_message .= "Second tier side decoration: ".clean_string($sideDec2Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
	if (isset($tierSize3Select)){
    $email_message .="<h2>Third tier information</h2><br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($tierSize3Select)){
    $email_message .= "Third tier size: ".clean_string($tierSize3Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($flavour3Select)){
    $email_message .= "Third tier flavour: ".clean_string($flavour3Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($sideDec3Select)){
    $email_message .= "Third tier side decoration: ".clean_string($sideDec3Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
	if (isset($tierSize4Select)){
    $email_message .="<h2>Fourth tier information</h2><br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($tierSize4Select)){
    $email_message .= "Fourth tier size: ".clean_string($tierSize4Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($flavour4Select)){
    $email_message .= "Fourth tier flavour: ".clean_string($flavour4Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($sideDec4Select)){
    $email_message .= "Fourth tier side decoration: ".clean_string($sideDec4Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
	if (isset($tierSize5Select)){
    $email_message .="<h2>Fifth tier information</h2><br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($tierSize5Select)){
    $email_message .= "Fifth tier size: ".clean_string($tierSize5Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($flavour5Select)){
    $email_message .= "Fifth tier flavour: ".clean_string($flavour5Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($sideDec5Select)){
    $email_message .= "Fifth tier side decoration: ".clean_string($sideDec5Select)."<br>";
    }
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    $email_message .="<h2>Other information</h2><br>";
    
    $email_message .= "Top tier decoration: ".clean_string($topDec1Select)."<br>";
 
    $email_message .= "Top tier name: ".clean_string($decName1)."<br>";
 
    $email_message .= "Top tier age: ".clean_string($decAge1)."<br>";
    
    $email_message .= "Top tier message: ".clean_string($decMessage1)."<br>";
	
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
    
    $email_message .="<h2>How many figures?</h2><br>";
	
    if ($figureSelect1 === "order_figure_1.php"){
	$email_message .= "Number of figures: "."1"."<br>";	
	}
    else {
		if ($figureSelect1 === "order_figure_2.php"){
	    $email_message .= "Number of figures: "."2"."<br>";	
	    }
		else{
			if ($figureSelect1 === "order_figure_3.php"){
	        $email_message .= "Number of figures: "."3"."<br>";	
	       }
		   else{
			   if ($figureSelect1 === "order_figure_4.php"){
	           $email_message .= "Number of figures: "."4"."<br>";	
	          }
		   }
		}
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($genderSelect1)){
    $email_message .="<h2>First figure information</h2><br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($genderSelect1)){
    $email_message .= "First figure gender: ".clean_string($genderSelect1)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($hairSelect1)){
    $email_message .= "First figure hair colour: ".clean_string($hairSelect1)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($glassesSelect1)){
    $email_message .= "First figure glasses?: ".clean_string($glassesSelect1)."<br>";
    }
	else {
	$email_message .= "";
	}
	if (isset($hairStyle1)){
    $email_message .= "First figure hairstyle: ".clean_string($hairStyle1)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($skinTone1)){
    $email_message .= "First figure skin tone: ".clean_string($skinTone1)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($outfit1)){
    $email_message .= "First figure outfit: ".clean_string($outfit1)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($otherDetails1)){
    $email_message .= "First figure other details: ".clean_string($otherDetails1)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($genderSelect2)){
    $email_message .="<h2>Second figure information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($genderSelect2)){
    $email_message .= "Second figure gender: ".clean_string($genderSelect2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairSelect2)){
    $email_message .= "Second figure hair colour: ".clean_string($hairSelect2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($glassesSelect2)){
    $email_message .= "Second figure glasses?: ".clean_string($glassesSelect2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairStyle2)){
    $email_message .= "Second figure hairstyle: ".clean_string($hairStyle2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($skinTone2)){
    $email_message .= "Second figure skin tone: ".clean_string($skinTone2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($outfit2)){
    $email_message .= "Second figure outfit: ".clean_string($outfit2)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($otherDetails2)){
    $email_message .= "Second figure other details: ".clean_string($otherDetails2)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($genderSelect3)){
    $email_message .="<h2>Third figure information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($genderSelect3)){
    $email_message .= "Third figure gender: ".clean_string($genderSelect3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairSelect3)){
    $email_message .= "Third figure hair colour: ".clean_string($hairSelect3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($glassesSelect3)){
    $email_message .= "Third figure glasses?: ".clean_string($glassesSelect3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairStyle3)){
    $email_message .= "Third figure hairstyle: ".clean_string($hairStyle3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($skinTone3)){
    $email_message .= "Third figure skin tone: ".clean_string($skinTone3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($outfit3)){
    $email_message .= "Third figure outfit: ".clean_string($outfit3)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($otherDetails3)){
    $email_message .= "Third figure other details: ".clean_string($otherDetails3)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($genderSelect4)){
    $email_message .="<h2>Fourth figure information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($genderSelect4)){
    $email_message .= "Fourth figure gender: ".clean_string($genderSelect4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairSelect4)){
    $email_message .= "Fourth figure hair colour: ".clean_string($hairSelect4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($glassesSelect4)){
    $email_message .= "Fourth figure glasses?: ".clean_string($glassesSelect4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($hairStyle4)){
    $email_message .= "Fourth figure hairstyle: ".clean_string($hairStyle4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($skinTone4)){
    $email_message .= "Fourth figure skin tone: ".clean_string($skinTone4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($outfit4)){
    $email_message .= "Fourth figure outfit: ".clean_string($outfit4)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($otherDetails4)){
    $email_message .= "Fourth figure other details: ".clean_string($otherDetails4)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($streetName)){
    $email_message .="<h2>Delivery information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($streetName)){
     $email_message .= "Delivery date: ".clean_string($deliveryDate)."<br>";
	 }
	else {
	$email_message .= "";
	}
    if (isset($deliveryTimeSelect)){
    $email_message .= "Delivery time: ".clean_string($deliveryTimeSelect)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($businessName)){
    $email_message .= "Business name: ".clean_string($businessName)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($streetNumber)){
    $email_message .= "Street number: ".clean_string($streetNumber)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($streetName)){
    $email_message .= "Street name: ".clean_string($streetName)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($town)){
    $email_message .= "Town: ".clean_string($town)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($postcode)){
    $email_message .= "Postcode: ".clean_string($postcode)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($deliveryPhoneNumber)){
    $email_message .= "Delivery phone number: ".clean_string($deliveryPhoneNumber)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($otherDeliveryDetails)){
    $email_message .= "Other delivery details: ".clean_string($otherDeliveryDetails)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

    $email_message .= '</tr>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
    if (isset($collectionTimeSelect)){
    $email_message .="<h2>Collection information</h2><br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($collectionTimeSelect)){
    $email_message .= "Collection date: ".clean_string($deliveryDate)."<br>";
	}
	else {
	$email_message .= "";
	}
    if (isset($collectionTimeSelect)){
    $email_message .= "Collection time: ".clean_string($collectionTimeSelect)."<br>";
	}
	else {
	$email_message .= "";
	}
	$email_message .= '</td>';

$email_message .= '</tr>';

$email_message .= '</table>';	
	
$email_message .= '</td>';

$email_message .= '</tr>';
 
$email_message .= '</table>';

$email_message .= '</body>';
 
require("/home/drewbo1/public_html/PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "cakeenquiry@mrsmarshmallow.co.uk";  // SMTP username
$mail->Password = "IczEtXxg5Iq7"; // SMTP password

$mail->From = "cakeenquiry@mrsmarshmallow.co.uk";
$mail->FromName = "Cake enquiry";

$mail->AddAddress("naomi.marshall@mrsmarshmallow.co.uk");                  // name is optional
$mail->AddAddress($emailAddress);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Order from: ".($firstName." ".$lastName);
$mail->Body    = ($email_message);
$mail->AltBody = ($email_message);

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "";

?>
<br>

<?php include_once("../inc/footer.php"); ?>
	</div>
   
  </body>
</html>
