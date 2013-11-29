<?php
/**
 * @group exam
 * @author voyen1602
 *
 */
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://www.google.com.vn/');
    }
 
    public function testTitle()
    {
        $this->url('http://www.google.com.vn/');
        $this->assertEquals('Google', $this->title());
    }
 
}
?>