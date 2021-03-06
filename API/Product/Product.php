<?php
include_once('arrays.php');

class Product{

    private $name;
    private $storage;
    private $description;
    private $image;
    private $productID;
    private $price;
   
     
public function __construct($index){
    $this->productID = self::getProductID($index);  
    $this->storage = rand(1,50);
    $this->name= self::getName($index);
    $this->image = self::getImage($index); 
    $this->description = self::getDescription($index); 
    $this->price = self::getPrice($index); 
     
}
public static function getName($index){
  
    $name = $GLOBALS['nameArray'][$index];
    return $name;
}
public static function getImage(){
     
    return "https://picsum.photos/200/300";
}
public static function getDescription($index){
   
    $description = $GLOBALS['descriptionArray'][$index];
    return $description;
}
public static function getPrice($index){
   
    $price = $GLOBALS['priceArray'][$index];
    return $price;
} 
public static function getProductID($index){
   
    $productID = $GLOBALS['productID'][$index];
    return $productID;
} 
public function toArray(){
    
    $array = array(
        "productid"     => $this->productID,
        "name"          => $this->name,
        "storage"       => $this->storage,
        "image"         => $this->image,
        "description"   => $this->description,
        "price"         => $this->price
    );
    return $array;
}

}
