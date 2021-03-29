<?php
include_once('arrays.php');

class Product{

    private $customerID;
    private $orderID;
    private $date;
    private $price;
    private $products;
    private $address;


   
public function __construct($index){

    $this->customerID = rand(1,10);
    $this->orderID= rand(1,50);
    $this->date = self::getDate(); 
    $this->price = rand(5,500); 
    $this->products = self::getProducts(); 
    $this->address = self::getAddress();    
}
public static function getProducts(){
  $array = array();
  
  $rand = rand(1,10);

  for ($i=0; $i < $rand; $i++) { 
      array_push($array ,rand(1,10));
  }
  return $array;
    
}
public static function getAddress(){
     
    $address = "Lorem ipsum ";
    $address .= rand(1,50);
       
    return $address;
}
public static function getDate()
{
    $min = strtotime("-1 month");
    $max = strtotime("now");
    $timestamp = rand($min, $max);
    $date = date('Y-m-d H:i', $timestamp);
    return $date;
}
 
public function toArray(){
    
    $array = array(
        "customerID"          => $this->customerID,
        "orderID"       => $this->orderID,
        "date"         => $this->date,
        "products"   => $this->products,
        "price"   => $this->price,
        "address"         => $this->address
    );
    return $array;
}

}
