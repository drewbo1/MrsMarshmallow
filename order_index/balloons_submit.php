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

	

    <script>
	function myfunction() {
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
	<option value="order_info.php">Cakes</option>
	<option value="../index.php">No thanks</option>
	</select>
	</div>
	</div>
	</div>
	 <input class="btn btn-default btn-lg" type="submit" value="Next" onclick="myfunction()"/>
	 
</form>
	 
<?php  
$titleSelect = $_SESSION["titleSelect"]; 
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$phoneNumber = $_SESSION['phoneNumber'];
$emailAddress = $_SESSION['emailAddress'];   
$balloonSelect = $_SESSION['balloonSelect'];
$balloonDetails1 = $_SESSION['balloonDetails1'];
$balloonDetails2 = $_SESSION['balloonDetails2'];
$deliveryDate = $_SESSION['deliveryDate'];
$deliveryTimeSelect = $_SESSION['deliveryTimeSelect'];
$businessName = $_SESSION['businessName'];
$streetNumber = $_SESSION['streetNumber'];
$streetName = $_SESSION['streetName'];
$town = $_SESSION['town'];
$postcode = $_SESSION['postcode'];
$deliveryPhoneNumber = $_SESSION['deliveryPhoneNumber'];
$otherDeliveryDetails = $_SESSION['otherDeliveryDetails'];
$collectionDate = $_SESSION['collectionDate'];
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
   
$email_message .= "<img src='http://www.mrsmarshmallow.co.uk/Images/Logo.png' style='width:80px;height:100px' alt='Mrs Marshmallow logo'>";

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
	
	
	$email_message .= "<h2>Your details</h2>";
 
    $email_message .= "Title: ".clean_string($titleSelect)."<br>"; 
 
    $email_message .= "First Name: ".clean_string($firstName)."<br>";
 
    $email_message .= "Last Name: ".clean_string($lastName)."<br>";
 
    $email_message .= "Phone number: ".clean_string($phoneNumber)."<br>";
 
    $email_message .= "Email: ".clean_string($emailAddress)."<br>";
	
	$email_message .= '</td>';

    $email_message .= '</tr><br>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	
	$email_message .= "<h2>Balloon information</h2>";
    
    $email_message .= "What type of balloons: ".clean_string($balloonSelect)."<br>"; 
 
    $email_message .= "What balloons: ".clean_string($balloonDetails1)."<br>";
 
    $email_message .= "Balloon other information: ".clean_string($balloonDetails2)."<br>";
	
	$email_message .= '</td>';

    $email_message .= '</tr><br>';
	
	$email_message .= '<tr>';

    $email_message .= '<td>';
	if (isset($deliveryDate)){
	$email_message .= "<h2>Delivery information</h2>";
	}
	else {
	$email_message .= "";
	}
	if (isset($deliveryDate)){
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
	if (isset($collectionDate)){
	$email_message .= "<h2>Collection information</h2>";
	}
	else {
	$email_message .= "";
	}
	if (isset($collectionDate)){
    $email_message .= "Collection date: ".clean_string($collectionDate)."<br>";
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
$mail->Username = "";  // SMTP username
$mail->Password = ""; // SMTP password

$mail->From = "";
$mail->FromName = "Balloon enquiry";

$mail->AddAddress("");                  // name is optional
$mail->AddAddress($emailAddress);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Enquiry from: ".($firstName." ".$lastName);
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
