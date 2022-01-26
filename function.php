<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php

$tovar=[
['id'=>1,'name'=>'БРЮКИ','price'=>100,'quantity'=>2],
['id'=>2,'name'=>'ШТАНЫ','price'=>400,'quantity'=>4],
['id'=>3,'name'=>'РУБАШКА','price'=>400,'quantity'=>3],
['id'=>4,'name'=>'СВИТЕР','price'=>400,'quantity'=>1],
['id'=>5,'name'=>'КОФТА','price'=>400,'quantity'=>4]
]; 



function dobavlenie($tovar,$id){
foreach ($tovar as $value) {
  if ($id==$value['id']) {
  $cart = ['sum' => 0, 'items' => $value];
  $stoimost_tovara=$value['price']*$value['quantity'];
  $cart['sum']=$stoimost_tovara+$cart['sum'];
  }
  }
return $cart;
}


function dobavlenie_kolichestva($tovar,$id,$quantity){ 
foreach ($tovar as $value) {
  if ($id==$value['id']) {
     $value['quantity']=$quantity;
     $cart = ['sum' => 0, 'items' => $value];
     $stoimost_tovara=$value['price']*$value['quantity'];
     $cart['sum']=$cart['sum']+$stoimost_tovara;
    }
       
  }
return $cart;
}

function udalenie($tovar,$id){
foreach ($tovar as $value) {
  if ($id==$value['id']) {
     $cart = ['sum' => 0, 'items' =>[]];
     $value['quantity']=0;
     $stoimost_tovara=$value['price']*$value['quantity'];
     $cart['sum']=$cart['sum']-$stoimost_tovara;
    }
       
  }
return $cart;
}

function pereshet($tovar){
foreach ($tovar as $value) {
     $cart = ['sum' => 0, 'items' =>$value];
     $stoimost_tovara=$value['price']*$value['quantity'];
     $cart['sum']=$cart['sum']+$stoimost_tovara;
     if ($cart['sum']>=2000){
      $cart['sum']=$cart['sum']-($cart['sum']*0.1);
     }

    }
return $cart;
}
?>


</body>
</html>




