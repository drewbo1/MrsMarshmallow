<?php include_once("../inc/header.php"); ?>

    <title>Mrs Marshmallow| Make an enquiry</title>

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
   <div class="container-fluid">
       <div class='row no-gutters'>
           <div class='col'>
               <div class='hero-image-2'>
                   <nav class="navbar navbar-expand-lg navbar-dark">
            <a class='navbar-brand' href='../index.php'>
            <img src='../Images/Logo.png' width='30' height: 'auto' aly='logo' />
            </a>
             <span class="navbar-text">
    Mrs Marshmallow
  </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" bg-light></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../index/about_index.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="../index/gallery_index.php">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="../index/information_index.php">Information</a></li>
            <li class="nav-item"><a class="nav-link active" href="../order_index/enquiry_select.php">Enquiry</a></li>
          </ul>
          </div>
        </nav>
               </div>
          <div class='hero-text'>
        <img src="../Images/Logo.png"
 style="width:100px;height:auto" alt="Mrs Marshmallow logo">
          <h2>Unfortunately Mrs Marshmallow is no longer taking orders</h2>
         <h4>Thank you to all my previous customers for your support over the years</h4>
        </div>
     
	 
	 
	 
	 
 
	<?php include_once("../inc/footer.php"); ?>
           </div>
           
       </div> 


	</div>
   
	 
  </body>
</html>
