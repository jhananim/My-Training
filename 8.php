<?php
$cars=array("audi"=>"50,000","honda"=>"40,000","suzuki"=>"30,000","benz"=>"45,000");
echo"i like $cars[3] and $cars[1] <br>";
echo count($cars);
echo "<br>";
print_r(array_change_key_case($cars,CASE_UPPER));
echo"<br>";
print_r(array_chunk($cars,2));
echo"<br>";
echo "the cost of audi is Rs ".$cars['audi']."good luck" ;
echo"<br>";
foreach($cars as $x => $x_value) {
     echo "car name=" . $x . ", and its price" . $x_value;
     echo "<br>";
}
?>


