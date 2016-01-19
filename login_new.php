<?php
  //login.php
  $page_name="entry.php";

  include 'core.php';
 
?>

<!doctype html>

<html lang="en">
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
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <!--<div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>-->
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <style>
              .demo-blog--blogpost .demo-blog__posts > .mdl-card .mdl-card__media 
              {
                background-image: url('images/login_button_01.jpg');
                height: 200px;
              }
            </style>
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3>Login</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p>
                <!--login forum-->
                <!-- Simple Textfield -->
                <form action="<?php echo $current_file; ?>" method="POST" enctype="" target="">
                  <div class="mdl-textfield mdl-js-textfield">
                    <fieldset>
                      <legend>Email id :</legend>
                      <input class="mdl-textfield__input" id="sample1" type="email" name="emailid" value="">
                      <!--<label class="mdl-textfield__label" for="sample1">email</label>-->
                    </fieldset>
                    <br/>
                    <fieldset>
                      <legend>Password :</legend>
                      <input class="mdl-textfield__input" id="sample1" type="password" name="password" value="">
                      <!--<label class="mdl-textfield__label" for="sample1">password</label>-->
                    </fieldset>
                    <!--<input type="submit" name="log in" value="log in" size="5">-->
                    <!-- Flat button -->
                    <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                    <button class="mdl-button mdl-js-button" action>
                      Login
                    </button>
                    </div>
                  </div>
                </form>
              </p>
            </div>   
          </div>
          <!--navigation panel for large database-->
        </div>
    <?php
      require 'footer.php';
    ?>
      </main>
      <!--<div class="mdl-layout__obfuscator"></div>-->
    </div>
    <script src="../../material.min.js"></script>
  </div>
</body>
</html>
