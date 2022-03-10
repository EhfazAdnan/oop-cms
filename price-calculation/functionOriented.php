<?php

// include function page or normal function
function calculateShipping($productWeight, $priceKilogram, $freeShipping){
    if(!$freeShipping){
        return $productWeight * $priceKilogram;
    }else{
        return "Free Shipping Applicable";
    }
}


$products[1]['weight'] = 1;
$products[1]['price'] = 10;
$products[1]['freeShipping'] = true;

$products[2]['weight'] = 5;
$products[2]['price'] = 10;
$products[2]['freeShipping'] = false;

$pricePerKilogram = 5;
$totalShippingPrice = 0;

foreach($products as $product){
    $totalShippingPrice = calculateShipping($product['weight'], $pricePerKilogram, $product['freeShipping']);
}
echo $totalShippingPrice;

