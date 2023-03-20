<?php 

$multi = array(
     "sid" => array(  "firstname" => "pritam", "country" => "united states of america" ),  
    "sonoo" => array(  "firstname"=> "ritam",  "country"=> "london"  )  
);  
$arrcol = array_column($multi, 'firstname');  
print_r($arrcol);  


?>