<?php
namespace phonPhon;
class User extends \CmsObject {
    public $rights;
    public $firstName;
    public $lastName;
    public $password;
    public $userName;// username is the email address

    private $saveUserQuery = "INSERT INTO users ????";
    function __construct($firstName,$lastName,$password,$userName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->userName = $userName;
    }

    function saveUser () {

    }
}
?>