<?php
namespace Kristins;

use Zend\Db\Adapter\Adapter; 
use Zend\Db\ResultSet\ResultSet;
use Kristins\Model\ServiceTicket; 
use Kristins\Model\ServiceTicketTable;  
use Zend\Db\TableGateway\TableGateway; 
 
class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
    	return array(
    			'factories' => array(
    					'Kristins\Model\ServiceTicketTable' =>  function($sm) {
    						 
    						$tableGateway = $sm->get('AlbumTableGateway');
    						//var_dump($tableGateway); 
    						//echo 'hola'; exit();
    						$table = new ServiceTicketTable($tableGateway);
    						return $table;
    					},
    					'AlbumTableGateway' => function ($sm) {
    						 $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
    					
    						
//     						$adapter = new \Zend\Db\Adapter\Adapter(array(
//     								'driver' => 'Pdo_Mysql',
//     								'host'	=> 'shreous.com',
//     								'database' => 'kristins_serviceticket',
//     								'username' => 'kristins_rwst',
//     								'password' => 'ZendRest2013'
//     						));
    						
    					//	$adapter = new Zend\Db\Adapter\Adapter($adapter);
    					//	var_dump($adapter); exit();
    						
    						$resultSetPrototype = new ResultSet();
    						$resultSetPrototype->setArrayObjectPrototype(new ServiceTicket());
    						return new TableGateway('serviceticket', $dbAdapter, null, $resultSetPrototype);
    					},
    			),
    	);
    }
    
}