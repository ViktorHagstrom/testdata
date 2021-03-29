<?php
include_once('arrays.php');

class Product{
    /** Förnamn
 * Efternamn
 * Telefon
 * Mail
 * Gata
 * Postnr
 * Postort
 */

    private $firstName;
    private $lastName;
    private $phone;
    private $mail;
    private $address;
    private $zip;
    private $town;

     
public function __construct($index){

    $this->firstName = self::getfirstName($index);
    $this->lastName= self::getLastName($index);
    $this ->mail = $this->firstName."@mail.se";
    $this->phone = self::getPhone($index); 
    $this->address = self::getAddress($index); 
    $this->zip = self::getZip($index); 
    $this->town = self::getTown($index);   
}
public static function getfirstName($index){
  
    $firstName = $GLOBALS['firstNames'][$index];
    return $firstName;
}
public static function getTown($index){
  
    $town = $GLOBALS['town'][$index];
    return $town;
}
public static function getLastName($index){
  
    $lastName = $GLOBALS['lastNames'][$index];
    return $lastName;
}
public static function getPhone($index){
     
    $phone = $GLOBALS['phones'][$index];
    return $phone;
}
public static function getAddress(){
    $address = "Lorem ipsum ";
    $address .= rand(1,50);
       
    return $address;
}
public static function getZip($index){
   
    $zip = $GLOBALS['zip'][$index];
    return $zip;
}  
public function toArray(){
    
    $array = array(
        "firstName"          => $this->firstName,
        "lastName"          => $this->lastName,
        "phone"       => $this->phone,
        "mail"         => $this->mail,
        "address"   => $this->address,
        "town"   => $this->town,
        "zip"         => $this->zip
    );
    return $array;
}

}
