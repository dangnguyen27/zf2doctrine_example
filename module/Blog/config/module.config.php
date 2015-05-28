<?php 
/**
* Cấu hình routes, các controller thực hiện 
*/

namespace Blog;

return array(

	'controllers' => array(
		'invokables'=>array(
			'Blog\Controller\Post' => 'Blog\Controller\PostController', // 
			'Blog\Controller\Category' => 'Blog\Controller\CategoryController'
		)
	),

	'router' => array( //router là 1 mảng gồm nhiều route
		'routes' => array(
			'post' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/post[/:action][/:id][/:slug]' ,//
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                        'slug' => '[a-zA-Z][a-zA-Z0-9_-]*',
					),
					'defaults' => array(
						'controller' => 'Blog\Controller\Post',
						'action' => 'index'
					)
				)
			),

			'category' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/category[/:action][/:id][/:slug]' ,//
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                        'slug' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        
					),
					'defaults' => array(
						'controller' => 'Blog\Controller\Category',
						'action' => 'index'
					)
				)
			)
		) 
	),

	/**
	* Cấu hình đường dẫn đến các view của module
	*/
	'view_manager' => array(
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

    /**
    * view helper ( đây là class hỗ trợ việc hiển thị body của bài viết với số lượng ký tự nhất định)
    */
    'view_helper' => array(
        'invokables' => array(
        	'body_helper' => 'Blog\View\Helper\BodyHelper',
        	'thumbnail_helper' => 'Blog\View\Helper\ThumbnailHelper'
        ),
    ),

);