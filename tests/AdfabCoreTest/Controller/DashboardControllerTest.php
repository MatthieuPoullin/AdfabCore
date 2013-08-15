<?php

namespace AdfabCoreTest\Controller\Frontend;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class DashboardControllerTest extends AbstractHttpControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $this->setApplicationConfig(
            include __DIR__ . '/../../TestConfig.php'
        );

        parent::setUp();
    }

    public function testIndexAction()
    {
    	$this->dispatch('/admin');
    	
    	$this->assertModuleName('adfabcore');
    	$this->assertControllerName('adfabcore\controller\dashboard');
    	$this->assertControllerClass('DashboardController');
    	$this->assertActionName('index');
    	$this->assertMatchedRouteName('zfcadmin');
    }
}
