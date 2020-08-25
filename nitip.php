<?php
 
class laptop{
 
    var $pemilik;
    var $merek;
    var $ukuran_layar;
 
   function hidupkan_laptop(){
       return "Hidupkan Laptop";
   }
 
   function matikan_laptop(){
       return "Matikan Laptop";
   }
 
}
 
$laptop_anto = new laptop();
echo $laptop_anto -> hidupkan_latop();
