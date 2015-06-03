<?php 
/**
* Cấu hình routes, các controller thực hiện 
*/

namespace User;

return array(

	'controllers' => array(
		'invokables'=>array(
			'User\Controller\User' => 'User\Controller\UserController', // 
			
		)
	),

	'router' => array( //router là 1 mảng gồm nhiều route
		'routes' => array(
			'frontend-user' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/user[/:action][/:id][/:username]' ,//
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                        'username' => '[a-zA-Z][a-zA-Z0-9_-]*',
					),
					'defaults' => array(
						'controller' => 'User\Controller\User',
						'action' => 'login'
					)
				)
			),

		) 
	),

	/**
	* Cấu hình đường dẫn đến các view của module
	*/
	'view_manager' => array(
		// 'template_map' => array(
  //           'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
  //           // 'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            
  //       ),
		'template_path_stack' => array(
			__DIR__ .'/../view',
		)
	),

	
	/**
	*Cấu hình module doctrine (đây là module cho phép thao tác trên dữ liệu tiện lợi, sử dụng các bảng trong CSDL như các đối tượng)
	*/
	'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),

   
);