<?php

namespace rvilbrandt\gamebook\Model;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-29 at 07:44:48.
 */
class ObjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = $this->getMockForAbstractClass("rvilbrandt\gamebook\Model\Object");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Object::setFromArray
     * @todo   Implement testSetFromArray().
     */
    public function testSetFromArray() {
        
        $arrJson = [
            "test" => "value"
        ];
        
        $this->assertNull($this->object->setFromObject($arrJson));
        $this->assertEquals("value", $this->object->test);
        
    }

}