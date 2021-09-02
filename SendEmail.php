<?php
class user{
  // Properties
  public $username;
  Private $email;

  // Methods

Private function __construct($username,$email) {
$this->username=$username;
$this->email=$email;
}
  
public function addfrinds(){
return "$this->email add anew frinds";


}

}
$userone=new User('toka','123');



?>