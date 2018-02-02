<?php

namespace MirazMac\BanglaString;

use PHPUnit\Framework\TestCase;

class BanglaStringTest extends TestCase
{
    protected $banglaStr;

    public function setUp()
    {
        $this->banglaStr = new BanglaString('hello');
    }

    public function tearDown()
    {
        $this->banglaStr = null;
    }

    public function testTranslate()
    {
        $this->assertInstanceOf('MirazMac\BanglaString\BanglaString', $this->banglaStr::translate('hello'));
    }

    public function testToBijoy()
    {
        $this->assertEquals('hello', $this->banglaStr->toBijoy('Ahello'));
    }

    public function testToAvro()
    {
        $this->assertEquals('যবষষড়', $this->banglaStr->toAvro('hello'));
    }

    public function testBanglaStringWithInvalidString()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $banglaStr = new BanglaString(10);
    }
}
