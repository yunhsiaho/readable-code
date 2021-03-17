<?php

// fw = for who

//function order pizza
function orderPizza($pizzaType, $pizzaReceiver)
{    
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $orderText = 'A ';
    $orderText .= $pizzaType;
    $totalPrice = pizzaPrices($type);    
    $address = 'unknown';
    if ($pizzaReceiver == 'koen') {
        $address = 'a peniche in Liège';
    } else{
        if ($pizzaReceiver == 'nico') {
            $address = 'somewhere in Belgium';
        } 
        if ($pizzaReceiver == 'students') {
            $address = 'BeCode office';
        }  
    }
    $orderText .= ' pizza should be sent to ' . $pizzaReceiver . ". <br>The address: {$address}.";
    echo $orderText.'<br>'.'The bill is €' . $totalPrice . '.<br>'."Order finished.<br><br>";
}

//code not used
// //function count total pizza price
// function total_price($totalPrice)
// {
//     return $totalPrice;
// }

// //show pizza type
// function test($p_type)
// {
//     echo "Test: type is {$p_type}. <br>";
// }

//pizza price
function pizzaPrices($pizzaType)
{
    $price = 'unknown';
    
    if ($pizzaType == 'marguerita') {
        $price = 5;
    } else {
        if ($pizzaType == 'golden') {
            $price = 100;
        }        
        if ($pizzaType == 'calzone') {
            $price = 10;
        }        
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    
    return $price;
}

//order pizza for...
function thePizzaOrders()
{
    $test = 0;//?
    orderPizza('hawai', 'nico');
    orderPizza('marguerita', 'nick');    
    orderPizza('golden', 'students');
}

//make all hapy
function makeAllHappy($orderPizza)
{
    if ($orderPizza) {
        thePizzaOrders();
    } else {
        // Should not do anything when false
    }
}

makeAllHappy(true); 