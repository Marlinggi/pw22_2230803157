<?php

$a = "hello";
$hello= "Hello world!";

// menampilkan isi variabel $a 
// hello 
echo $a . "</br>";

// menampilkan isi variabel $a 
// Hello world! 
echo $hello."</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a 
// isi variabel sa hello. jadi, nanti akan menampilkan isi dari variabel Shello
// Hello world
echo $$a . "</br>";
 ?>