<?php
/**
 * @group login
 * @author voyen1602
 *
 */
class Login extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
    	$this->setHost('localhost');
        $this->setBrowser('firefox');
     //   $this->setBrowserUrl('http://localhost/testgit/htdocs/');
        $this->setBrowserUrl('http://localhost:8080/index.php/');
    }
 
    public function testTitle()
    {
        $this->url('login/index');
        $this->assertEquals('Login', $this->title());
    }
 
}
?>