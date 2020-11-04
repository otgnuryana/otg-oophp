<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "Hallo" . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>". ContohStatic::halo();
// echo "<hr>";

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo" . self::$angka++ . "kali.";
    }
}

$obj = new Contoh;
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();
echo "<hr>";
$obj2 = new Contoh;
echo $obj2->Halo();
echo $obj2->Halo();
echo $obj2->Halo();