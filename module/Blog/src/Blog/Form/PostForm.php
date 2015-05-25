<?php

namespace Blog\Form;

use Doctrine\ORM\EntityManager;
use Zend\Form\Form;

class PostForm extends Form
{

	public function __construct(EntityManager $em)
	{
		parent::__construct('post-form');

		$this->setAttribute('method','post');

		$this->add(array(
			'name' => 'id',
			'type' => 'Hidden'
		));

		$this->add(array(
			'name' => 'title',
			'type' => 'text',
			'options' => array('label'=>'Title'),
			
		));

		$this->add(array(
			'name' => 'slug',
			'type' => 'text',

		));

		$this->add(array(
			'name' => 'content',
			'type' => 'textarea',
			'options' => array('label'=>'Content')
		));

		$this->add(array(
			'name' => 'category',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'label' => 'Category',
				'object_manager' => $em,
				'target_class' => 'Blog\Entity\Category',
				'property' => 'name'
			),
			'attributes' => array('required'=>true)
		));

		$this->add(array(
			'name' => 'submit',
			'attributes' => array(
				'type' => 'submit',
				'value' => 'Save',
				'id' => 'submit_btn'
			)
		));
	}

}