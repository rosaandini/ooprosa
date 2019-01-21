<?php 
 
// define( 'NAMA', 'Rosa Andini');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// const NAMA = 'Rosa Andini'; 
// }

// echo Coba::NAMA;

// echo __FILE;

// function coba(){
// return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


