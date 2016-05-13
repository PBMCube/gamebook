<?php

namespace rvilbrandt\gamebook\Model;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-29 at 10:16:11.
 */
class InventoryTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Inventory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Inventory;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Inventory::addItem
     */
    public function testAddItem() {
        $this->assertNull($this->object->addItem("test", new Inventory\Item()));
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Inventory::hasItem
     */
    public function testHasItem() {
        $this->object->addItem("test", new Inventory\Item());
        $this->assertTrue($this->object->hasItem("test"));
        $this->assertFalse($this->object->hasItem("non-existent"));
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Inventory::getItem
     */
    public function testGetItem() {
        $this->object->addItem("test", new Inventory\Item());
        $this->assertInstanceOf("rvilbrandt\\gamebook\\Model\\Inventory\\Item", $this->object->getItem("test"));
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Inventory::removeItem
     */
    public function testRemoveItem() {
        $this->object->addItem("test", new Inventory\Item());
        $this->assertNull($this->object->removeItem("test"));
        $this->assertFalse($this->object->hasItem("test"));
    }

}