<!DOCTYPE html>
<html lang="nl">
<head>
 <meta charset="UTF-8">
 <title>Lamp Shop</title>
 <style>
     th, td {
       padding-left: 4px;
      border: 1px solid black;
      font-weight: 200; 
      text-align: left;  
}
th{
  background: rgb(209, 209, 209);
}
  </style>
</head>
<body>

 <form action="" method="get">
Product type: <select name="product" id="product">
<option>Kies een lamp</option>
<?php
 foreach ($products as $product) {
    echo "<option id='selectedvalue' value='$product->productnr'>";
    echo $product->name;
    echo "</option>";
}
?>
 </select>
 </br>
 </br>
Wattage: <input type="search" name="search" placeholder="wattage" required></input>
</br>
</br>
<button type="submit">Show List</button>
</br>
<h1><?php  
if(isset($_GET['product']))
{
    $var = ($_GET['product']);
    if($var == "1"){
        echo"Head Lamp";
    }
        if($var == "2") {
            echo"Rear Lamp";
        }
        if($var == "3") {
            echo"Winker";
        }
}
?></h1>
 </form>
 <?php 
 
 echo "<table><tr><th></th><th>Partnr</th><th>Specs</th><th>Price</th></tr>";
 foreach ($parts as $part) {
     $test = trim($part->partnr);
    echo "<tr><th><img src=\"assets/$test.png\"/></th><th>$part->partnr</th><th>$part->specs</th><th>$part->price</th></tr>";
}
 echo "</table>";
 ?>
<table>

</body>
</html>