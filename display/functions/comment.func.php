<?php
	//comment.func.php
	/*
		this function output the one the comment section

		prototype
		function comment($cobj)

    $cobj=  object of comment class

    comment class members 

      public $cid;              // comment id
      public $userid;           // user who commented
      public $bookid;           // book on which comment is done
      public $comment_heading;  // comment heading
      public $comment;          // comment text
      public $dated;            // commnet dated


      extends from user class

      public $uid;    
      public $username; 
      public $email;    
      public $fname;    
      public $lname;    
      public $gender;   
      public $dob;    
      public $status;   
      public $level;    

    book class interfaces

      public function __construct($ids); // comment class constructor  
      public function get_user($id);     // user class function to get the user details related with current book 
   
	*/

	function comment($cobj)
	{
		# code...
?>

<div class="comment mdl-color-text--grey-700">
  <header class="comment__header">
    <img src="images/co1.jpg" class="comment__avatar">
      <div class="comment__author">
        <strong><?php echo $cobj->username; ?></strong>
        <span><?php echo $cobj->dated;?></span>
      </div>
  </header>
  <div class="comment__text">
  <?php
    echo $cobj->comment;
  ?>
  </div>
  <nav class="comment__actions">
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">thumb_up</i>
      <span class="visuallyhidden">like comment</span>
    </button>
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">thumb_down</i>
      <span class="visuallyhidden">dislike comment</span>
    </button>
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">share</i>
      <span class="visuallyhidden">share comment</span>
    </button>
  </nav>
</div>
<hr/>
<?php
	}
?>