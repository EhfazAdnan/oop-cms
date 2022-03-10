<?php
  class Product{
      private $price;
      private $weight;
      private $freeShipping = false;

      public function __construct($price, $weight){
        $this->price = $price;
        $this->weight = $weight;
      }

      function getPrice(){
          return $this->price;
      }

      function getWeight(){
          return $this->weight;
      }

      function setFreeShipping(){
          $this->freeShipping = true;
      }

      function getFreeShipping(){
          return $this->freeShipping;
      }
  }

  class Shipping{
      private $totalShipping;
      private $products;
      private $pricePerkilogram;

      public function __construct($pricePerkilogram){
        $this->pricePerkilogram = $pricePerkilogram;
      }

      public function addProducts(Product $product){
          $this->products[] = $product;
      }

      public function calculateTotalShipping(){
          foreach($this->products as $product){
              if(!$product->getFreeShipping()){
                $this->totalShipping += $product->getWeight() * $this->pricePerkilogram;
              }
          }
      }

      public function getTotalShippingPrice(){
          return $this->totalShipping;
      }

  }

  $product = new Product(100, 5);
  $productExtra = new Product(100, 50);
  $productExtra->setFreeShipping();

  $shipping = new Shipping(60);
  $shipping->addProducts($product);
  $shipping->addProducts($productExtra);

  $shipping->calculateTotalShipping();
  $totalShippingPrice = $shipping->getTotalShippingPrice();

  echo $totalShippingPrice;

?>