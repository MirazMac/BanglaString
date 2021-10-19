<?php

namespace MirazMac\BanglaString\Tests;

use MirazMac\BanglaString\BanglaString;
use PHPUnit\Framework\TestCase;

/**
 * Writing tests for something like this ambigous and pointless
 * Output tends to be different based on different factors and there's no way to fully write the tests for this.
 */
class BanglaStringTest extends TestCase
{
    public function testTranslate()
    {
        $this->assertInstanceOf('MirazMac\BanglaString\BanglaString', BanglaString::translate('hello'));
    }

    public function testBanglaStringWithInvalidString()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $banglaStr = new BanglaString(10);
    }
}
