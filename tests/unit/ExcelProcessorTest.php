<?php

class ExcelProcessorTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testExcelProcessor()
    {
	    $ep = new ExcelProcessor();
	    $ep->process();
    }

}
