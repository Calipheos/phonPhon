<?php
namespace phonPhon;
// This class is responsible for all actions regarding the articles in the app.
// create, edit, update, delete

//echo $servername;
class Article extends \CmsObject {   
  //properties

  
  public $id;
  public $dateCreated;
  public $dateUpdated;
  public $author;
  public $article;
  public $title;
  public $querry;

  private $insertQuery = "INSERT INTO articles (author, article, title) VALUES (?,?,?,?)";
  private $deleteQuery = "DELETE FROM articles where id = ?";
  private $editQuery = "UPDATE articles SET author=?, article=?, title=?, dateUpdated=? WHERE id=?";

  private $valueTypes = 'ssss';

    function __construct($title,$author,$article) {
        echo "In Article constructor\n";
        $this->dateCreated =  date('d.m.Y');
        $this->title = $title;
        $this->author = $author;
        $this->article = $article;
    }

  public function insertArticle () {
    $this->establishConnection();
    $this->conn->prepare($this->insertQuerry);
    $this->conn->bind_param($this->valueTypes,$this->author, $this->article, $this->dateCreated, $this->title );
    $response = $this->executeQuerry($this->conn);
    echo 'Article Saved' + $response;
  }

  public function deleteArticle () {
    $this->establishConnection();
    $this->conn->prepare($this->deleteQuerry);
    $this->conn->bind_param('i',$this->id);
    $response = $this->executeQuerry($this->conn);
    echo 'Article Deleted' + $response;
  }

  public function editArticle(){ 
    $this->establishConnection();
    $this->conn->prepare($this->editQuerry);
    $this->conn->bind_param($this->valueTypes,$this->author, $this->article, $this->dateCreated, $this->title );
    $response = $this->executeQuerry($this->conn);
    echo 'Article Edit' + $response;
  }
}



?>
