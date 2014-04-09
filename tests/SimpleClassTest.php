<?php

namespace CM14;

class SimpleClassTest extends \PHPUnit_Framework_TestCase
{
    public function testIsValid() {
        $simpleClass = new SimpleClass();
        $this->assertTrue($simpleClass->isValid());
    }
} 