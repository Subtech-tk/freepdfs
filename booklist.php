<?php
	//index.php
  
  $page_name="booklist.php";
	
  $subcat=$_GET['tag'];
  $subcat=htmlentities($subcat);

  // add a script to neutralize the injections
	$title=$subcat;
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
            include_once 'display/functions/shopping.func.php';

              $result=$connection->query("SELECT `id`,`name`,`bref` FROM `books` WHERE `subcat`='$subcat' ORDER BY `name` ASC");
              $count=$result->num_rows;
              if ($count==0) 
              {
                amazing('Something Goes Wrong',"No books are there on this subshelf related to $subcat","$http_referer");
              }
                $i=1;
              while ($rows=$result->fetch_array())
              { 
                $id=$rows[0];
                $booktitle=$rows[1];
                $bookbrefdesc=$rows[2];

                if ($i%2==0) 
                {
                  otr($booktitle,$bookbrefdesc,"entry?ref=$id");
                } 
                else 
                {
                  shopping($booktitle,$bookbrefdesc,"entry?ref=$id");
                }
                ++$i;
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