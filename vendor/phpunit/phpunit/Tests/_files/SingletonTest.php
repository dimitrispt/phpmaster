<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-28 at 10:54:00.
 */
class SingletonTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Singleton
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Singleton;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Singleton::getInstance
     * @todo   Implement testGetInstance().
     */
    public function testGetInstance() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
