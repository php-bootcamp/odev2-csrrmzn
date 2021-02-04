<?php

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

if ($sex=="female") {
	$FemaleCalorie = 10*$weight + 6.25*$height - 5*$age - 161;
	echo $FemaleCalorie;
}elseif ($sex=="male") {
	$MaleCalorie = 10*$weight + 6.25*$height - 5*$age + 5;
	echo $MaleCalorie;
}else{
	echo "Hata!";
}

/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */
