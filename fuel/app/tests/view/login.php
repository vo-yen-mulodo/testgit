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
        $this->setBrowser('firefox');
     //   $this->setBrowserUrl('http://localhost:8888/testgit/htdocs/');
        $this->setBrowserUrl('http://localhost/testgit/htdocs/');
    }
 
    public function testTitle()
    {
        $this->url('login/index');
        $this->assertEquals('Login', $this->title());
    }
 
}
?>