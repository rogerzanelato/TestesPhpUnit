<?php

namespace SON;

class ProductTest extends \PHPUnit\Framework\TestCase
{
    private $product;

    protected function setUp()
    {
        $pdo = $this->getMockBuilder(\PDO::class)
                    ->disableOriginalConstructor()
                    ->getMock();
        $this->product = new \SON\Model\Product($pdo);
    }

    public function testIfTotalIsZero()
    {
        $this->assertEquals(0, $this->product->getTotal());
    }

    public function testIfIdIsZero()
    {
        $this->assertEquals(0, $this->product->getId());
    }

    /**
     * @dataProvider collectionData
     */
    public function testEncapsulate($property, $expected)
    {
        $get = 'get' . ucfirst($property);
        $set = 'set' . ucfirst($property);

        $result = $this->product->{$get}();
        
        if ( !is_float($expected) && !is_int($expected) ) {
            $this->assertNull($result);
        } else {
            $this->assertEquals(0, $result);
        }
        
        $that = $this->product->{$set}($expected);
        $this->assertInstanceOf(\SON\Model\Product::class, $that);
        
        $actual = $this->product->{$get}();
        $this->assertEquals($expected, $actual);
    }

    public function collectionData()
    {
        return [
            ['name', 'Produto 1'],
            ['price', 10.15],
            ['quantity', 15],
        ];
    }
}