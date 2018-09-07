<?php

namespace SON;

class AreaTest extends \PHPUnit\Framework\TestCase
{
    public function testGetArea()
    {
        $area = new Area;
        
        $expected = 21;
        $actual = $area->getArea(3, 7);

        $this->assertEquals($expected, $actual);
    }
}