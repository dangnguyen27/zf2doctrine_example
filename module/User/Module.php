<?php

namespace User;

class Module
{
    

	/**
	*Trả về file module.config.php (file cấu hình module trong Zend)
	*/
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}


	/**
	*Cấu hình việc load các file controller, model của  module
	*/
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

	

}