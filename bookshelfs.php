<?php
	//index.php
  
  $page_name="bookShelfs.php";
	
	$title="BookShelfs";

?>
<!doctype html>
<html lang="en-uk">
<?php
	//including the head tag
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
            include 'core.php';
            include_once 'display/functions/otr.func.php';
            include_once 'display/functions/amazing.func.php';

              $result=$connection->query("SELECT DISTINCT `cat` FROM `books` ");
              $count=$result->num_rows;
              if ($count==0) 
              {
                amazing('Something Goes Wrong',"No bookshelfs found",'#');
              }
                $i=1;
              while ($rows=$result->fetch_array())
              { 
                $cat=$rows[0];
                otr($cat,"Books related to $cat","subshelf?cat=$cat",$cat);
              }
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