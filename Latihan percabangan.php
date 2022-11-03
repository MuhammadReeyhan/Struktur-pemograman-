<?php
$a = 80;
$b = 81;
if ($a % 80 == 0){
	echo $a. " = bilangan ini bernilai genap<br>";
	}else{
	echo $a. " = bilangan ini bernilai ganjil<br>";
	}
if ($b % 81 == 0){
	echo $b. "= bilangan ini bernilai ganjil<br>";
	}else{
	echo $b. "= bilangan in bernilai genap<br>";
	}
	

//no 2
$a = 5;
$b = 8;
if($a < $b){
	echo "$a lebih kecil dari $b<br>";
}elseif($a> $b){
	echo "$a lebih besar dari $b<br>";
}elseif($a == $b){
	echo "$a sama dengan $b<br>";
	
	}


//no 3
$unsername ="admin";
$pasword ="qwerty";
if($unsername =="admin" && $pasword =="qwerty"){
     echo "unsername dan pasword sesuai hak akses diberikan <br>";
     }else{
     echo "unsername dan pasword tidak sesuai <br> ";
     }
 
 
 //no4
$unsername ="admin";
$pasword ="qwerty";
if ($unsername =="admin" & $pasword =="qwerty"){
	echo " unsername dan pasword sesuai hak akses diberikan<br> ";
} elseif ($unsername =="admin" & $pasword !="qwerty"){
	echo " unsername sesuai pasword tidak sesuai<br>";
} elseif($unsername !="admin" & $pasword =="qwerty"){
	echo " unsermane tidak seduai , pasword sesuai<br>";
}elseif($unsername !="admin" & $pasword !="qwerty"){
	echo " unsername tidak sesuai  , pasword tidak sesuai<br> ";
}else{
	echo " Anda siapa juga???<br>";
}

?>
     
   	
