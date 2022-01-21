<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div>
<form name="travel" action="#" method="POST">
<input type="checkbox" name="id[1]">БРЮКИ цена 100 грн<input type="number" name="quantity_id[1]" min="0" max="10" value="0"><br>
<input type="checkbox" name="id[2]"> ШТАНЫ цена 400 грн<input type="number" name="quantity_id[2]" min="0" max="10" value="0"><br>
<input type="checkbox" name="id[3]"> РУБАШКА цена 300 грн<input type="number" name="quantity_id[3]" min="0" max="10" value="0"> <br>
<input type="checkbox" name="id[4]"> СВИТЕР цена 400 грн<input type="number" name="quantity_id[4]" min="0" max="10" value="0"><br>
<input type="checkbox" name="id[5]"> КОФТА цена 500 грн<input type="number" name="quantity_id[5]" min="0" max="10" value="0"><br>
<input type="submit" value="Добавить в корзину" />
<input type="reset" value="сбросить" />


<?php
$id_cart = $_POST['id'];
$quantity_cart = $_POST['quantity_id'];
$name_cart = ['1'=>"БРЮКИ", '2'=>"ШТАНЫ", '3'=>"РУБАШКА", '4'=>"СВИТЕР", '5'=>"КОФТА"];
$price_cart = ['1'=>100, '2'=>400, '3'=>300, '4'=>400, '5'=>500];

for ($i=1; $i <= count($name_cart); $i++) {
$tovar[$i]=[$id_cart[$i],$name_cart[$i],$quantity_cart[$i],$price_cart[$i]]; 
}
?>
<table border="1">
   <caption>КОРЗИНА</caption>
   <tr>
    <th style="min-width: 400px; text-align: center;">Наименование товара</th>
    <th style="min-width: 100px; text-align: center;">Количество</th>
    <th style="min-width: 100px; text-align: center;">Цена</th>
    <th style="min-width: 100px; text-align: center;">Итого</th>
    <th style="min-width: 100px; text-align: center;"></th>
   </tr>
<?php
foreach ($tovar as $tovars) {
if($tovars['0']=='on'){	
$sum_pokupki=$tovars['2']*$tovars['3'];
$sum_cart=$sum_cart+$sum_pokupki;
$sum_kol=$sum_kol+$tovars['2'];
if ($sum_cart>=2000) {
      $sum_cart=$sum_cart-($sum_cart*0.1);
    }
if ($sum_kol>=10) {
      $sum_cart=$sum_cart-($sum_cart*0.07);
    }
if ($sum_cart>=2000 & $sum_kol>=10) {
	  $sum_cart=$sum_cart-($sum_cart*0.12);
    }


echo '<tr>'.'<td>'.$tovars['1'].'</td>'.'<td>'.$tovars['2'].'</td>'.'<td>'.$tovars['3'].'</td>'.'<td>'.$tovars['3']*$tovars['2'].'</td>'.'<td>'.'<form action="#" method="POST">'.'<input name="del" type="submit" value="Удалить" />'.'</form>'.'</td>'.'</tr>';
}
}

?>
<tr><td>ВСЕГО</td><td><?php echo $sum_kol; ?></td><td></td><td><?php echo $sum_cart; ?></td></tr>
</table>
</body>
</html>

