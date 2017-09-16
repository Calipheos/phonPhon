<?php
// This class defines what is a comment and defines what you can do with it
class Comment{
	private $refArticleID;
	public $commentID;
	private $commentText;
	private $commentAuthor;
	private $commentDate;

	//save a comment into the database
	public function saveComment {
		$date = date('d.m.Y');
		$author = "Admin";
		$type = "comments";
		$arguments;
		$values;
	}
	//display a comment
	public function showComment {

	}
	public function deleteComment {

	}

}
?>
