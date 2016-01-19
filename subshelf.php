<?php
	//index.php
  
  $page_name="subshelf.php";
	
  $cat=$_GET['cat'];
  $cat=htmlentities($cat);
	$title=$cat;

// add a check condition to verify the cat
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

              $result=$connection->query("SELECT DISTINCT `subcat` FROM `books` WHERE `cat` LIKE '$cat'");
              $count=$result->num_rows;
              if ($count==0) 
              {
                amazing('Something Goes Wrong',"No bookshelfs found",'#');
              }
                $i=1;
              while ($rows=$result->fetch_array())
              { 
                $subcat=$rows[0];

                if ($i%2==0) 
                {
                  otr($subcat,"Books related to $subcat","booklist?tag=$subcat");
                } 
                else 
                {
                  shopping($subcat,"Books related to $subcat","booklist?tag=$subcat");
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