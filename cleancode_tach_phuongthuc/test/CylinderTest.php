<?php

require __DIR__ . "/src/Cylinder.php";

use PHPUnit\Framework\TestCase;

class CylinderTest extends TestCase
{
    /**
     *Test
     *DisplayName("Testing getVolume(0, 0)")
     */
    public function testGetVolume0And0()
    {
        $radius = 0;
        $height = 0;
        $expected = 0;

        $cylinder = new Cylinder(0, 0, 0);
        $result = $cylinder->getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }

    /**
     *Test
     *DisplayName("Testing getVolume(1, 2)")
     */

    public function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $expected = 18.84955592153876;

        $cylinder = new Cylinder($radius, $height, $expected);
        $result = $cylinder->getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }
}
