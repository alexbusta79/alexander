<?php

namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(
          //  include '/path/to/application/config/test/application.config.php'
        		 include __DIR__ . '/../../config/application.config.php'
        );
        parent::setUp();
    }
    public function testIndexActionCanBeAccessed()
    {
    	$this->dispatch('/');
    	$this->assertResponseStatusCode(200);
    
    	$this->assertModule('Application');
    	$this->assertControllerName('Index');
    	$this->assertControllerClass('IndexController');
    	$this->assertMatchedRouteName('index');
    }
    
//     public function testConsoleActionCanBeAccessed()
//     {
//     	$this->dispatch('/');
//     	$this->assertResponseStatusCode(0);
    
//     	$this->assertModule('application');
//     	$this->assertControllerName('application_console');
//     	$this->assertControllerClass('ConsoleController');
//     	$this->assertMatchedRouteName('index');
//     }
}