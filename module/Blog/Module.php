<?php

namespace Blog;

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
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__, //tương đương với 'Blog' => Blog/src/Blog
                ),
            ),
        );
	}

	public function getViewHelperConfig() 
	{
         return array(
             'factories'=>array(
                 'body_helper'=>function($sm) {
                    $helper = new View\Helper\BodyHelper;
                    return $helper;
                 },
                 'thumbnail_helper' => function($sm) {
                    $helper = new View\Helper\ThumbnailHelper;
                    return $helper;
                 }
             ),
         );
     }

}