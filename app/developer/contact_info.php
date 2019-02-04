<?php
namespace App\developer;

class contact_info{
	public $Name;
 public $Contact;
 public function __construct($developer)
 {
 	$this->Name=$developer['Name'];
 	$this->Contact=$developer['Contact'];
 }
 public function getName()
 {
 	return $this->Name;
 }
 public function getContact()
 {
 	return $this->Contact;
 }
 
}
 

?>