<?php

namespace User\Form;

use Zend\Form\Form;
use Doctrine\ORM\EntityManager;

class RegisterForm extends Form
{

	public function __construct(EntityManager $em)
	{
		parent::__construct('register-form');

		$this->setAttribute('method','post');

		$this->add(array(
			'name' => 'id',
			'type' => 'Hidden'
		));

		$this->add(array(
			'name'=>'username',
			'type'=>'text',
			'options'=>array('label'=>'Ten dang nhap')
		));
		$this->add(array(
			'name' => 'password',
			'type' => 'password',
			'options'=>array('label'=>'Password')

		));
		$this->add(array(
			'name'=>'email',
			'type'=>'email',
			'options'=>array('label'=>'Email')
		));
		$this->add(array(
			'name' => 'avatar',
			'type' => 'file'
		));
		$this->add(array(
			'name'=>'submit',
			'attributes' => array(
				'type' => 'Submit',
				'value' => 'Dang ky',
				
			)
		));
	}

}