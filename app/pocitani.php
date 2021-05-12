<?php
require "vendor/autoload.php";

namespace BasicPHPUnitTest\pocitani;

class pocitani
{

    public function soucet(int $x, int $y): int //funkce pro sčítání//
    {
        $soucet = $x + $y;
        return $soucet;
    }
    
    public function odecitani (int $x, int $y): int //funce pro odčítání//
    {
        $odecitani = $y - $x;
        return $odecitani;
    }

    public function nasobeni(int $x, int $y): int //funkce pro násobení//
    {
        $nasobeni = $x * $y;
        return $nasobeni;
    }
}
?>