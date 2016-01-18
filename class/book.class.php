<?php
	// book class
	/**
	*  this is the book class which contains the all detail about the particular books provided by book id
  *  it extends the user class as user who uploaded the book is also of some concern 
  * 
	*/
	class book extends user
	{
		
    public $id;
    public $booktitle;
    public $tags;
    public $size;
    public $bookbrefdesc;
    public $bookdesc;
    public $durl;
    public $burl;
    public $preview;
    public $sdurl;
    public $author;
    public $publisher;
    public $uploader;
		
    public function __construct($ids)
		{
		  
      include "dbms/dbms_imp.php";
		  $resultb=$connection->query("SELECT * FROM `books` WHERE `id`='$ids'");
      $count_rows=$resultb->num_rows;
      if ($count_rows!=1) 
      {
          // error handler
      }
      else
      {
        $rows=$resultb->fetch_array();  
        $this->id=$rows[0];
        $this->booktitle=$rows[1];
        $this->tags=$rows[4];
        $this->size=$rows[5];
        $this->bookbrefdesc=$rows[6];
        $this->bookdesc=$rows[7];
        $this->durl=$rows[8];
        $this->burl=$rows[10];
        $this->preview=$rows[11];
        $this->sdurl=$rows[12];
        $this->author=$rows[13];
        $this->publisher=$rows[14];
        $this->uploader=$rows[15];

        // to get user details 
        $this->get_user($this->uploader);
     }
		}
	// end of class
  }
?>