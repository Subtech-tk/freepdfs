<?php
	//index.php
  $page_name="index.php";
	
	$title="Index";

?>
<!doctype html>
<html lang="en-uk">
<?php
	//includind the head tag
	require 'head.php';
?>
<body>
<?php
	// including the header of the document
	require 'header.php';
	// including the blog layout 
?>
<div>
	<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
         <?php
              include_once 'display/functions/get_image.func.php';
              
              include_once 'display/functions/otr.func.php';
              otr('FREEPDFs','Collection of pdfs that\'s avaliable on internet','bookshelfs');

              include_once 'display/functions/amazing.func.php';
              amazing('I couldn’t take any pictures but this was an amazing thing…','hello world','#');
              
              //include_once 'display/functions/shopping.func.php';
              //shopping('hello','hello world','index.php');

              //include_once 'display/next.nav.func.php';
              //next_nav('index.php');
              
         ?> 
        </div>
    <?php
    	require 'footer.php';
    ?>
      </main>
      <!--<div class="mdl-layout__obfuscator"></div>-->
    </div>
</div>
</body>
<?php
	require 'script.php';
?>
</html>