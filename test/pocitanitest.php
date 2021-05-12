<?php

use úkol\app\pocitani;

final class pocitanitest extends PHPUnit\Framework\TestCase
{

    public function testscitani(): void
    {
        $c = new pocitani();
        for ($i = 1, $i <= 10, $i++) {
            $x = rand(0, 1000);
            $y = rand(1, 1000);
            $this->assertSame($c->scitani($x, $y), $x + $y);
        }
    }
    public function testodcitani(): void
    {
        $c = new pocitani();
        for ($i = 1, $i <= 10, $i++) {
            $x = rand(0, 1000);
            $y = rand(1, 1000);
            $this->assertSame($c->odcitani($x, $y), $x - $y);
        }
    }

    public function testscitani(): void
{
        $c = new pocitani();
        for ($i = 1, $i <= 10, $i++) {
            $x = rand(0, 1000);
            $y = rand(1, 1000);
            $this->assertSame($c->nasobeni($x, $y), $x * $y);
        }
    }
}
?>

    