<?php
$kullanici="emir";
$sifre="123";
function giris($user,$password){
    global $sifre;
    global $kullanici;
    if($kullanici == $user and $sifre==$password)
    $giris=true;
else
$giris=false;
return $giris;

}
if(giris("emir","123"))
echo"Hosgeldin";
else
echo"tekrar deneyiniz";

?>