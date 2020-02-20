<?php include_once("../inc/header.php"); ?>
	
	<title>Mrs Marshmallow | Blog</title>
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
            <li class="active"><a href="../index/information_index.php">Information</a></li>
			<li><a href="../index/balloons.php">Balloons</a></li>
            <li><a href="../order_index/enquiry_select.php">Make an enquiry</a></li>
         </ul>
        </nav>
      <br>
      <h2>Mrs Marshmallow's blog</h2>
	
	<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_excerpt(); ?> 
<?php
endforeach;
?>

	</div>
	
      <?php include_once("../inc/footer.php"); ?>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../lightbox2-master/dist/js/lightbox.js"></script>
  </body>
</html>
