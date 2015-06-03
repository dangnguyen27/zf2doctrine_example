<?php 

namespace User\Controller;

use Blog\Controller\EntityUsingController;
use Zend\View\Model\ViewModel;
use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity;


use User\Form\RegisterForm;
use User\Entity\User;
use User\Utitlity\UserPassword as UserPassword;

class UserController extends EntityUsingController
{


	public function registerAction()
	{

		$user = new User;
		$form = new RegisterForm($this->getEntityManager());
		$form->setHydrator(new DoctrineEntity($this->getEntityManager(),'User\Entity\User'));
		$form->bind($user);


		$request = $this->getRequest();

		if ($request->isPost()) {
			$form->setInputFilter($user->getInputFilter());
			$form->setData($request->getPost());
			// $data = $request->getPost();
			
			if ($form->isValid()) {
				// $user->exchangeArray($data);
				// print "<pre>";
				// var_dump($user);
				// print "</pre>";
				// exit();

				// $user->setUsername($data['name']);
				// $user->setEmail($data['email']);
				$user->setEmailConfirmed(false);
				$user->setPassword(UserPassword::encryptPassword($user->getPassword()));

				$em = $this->getEntityManager();
				
				$em->persist($user);
				$em->flush();


				print "<pre>";
				var_dump($user);
				print "</pre>";
				exit();


				return $this->redirect()->toUrl('/user/success');
			}
		}
		return new ViewModel(array('form'=>$form));

		
	}

	public function successAction()
	{
		return new ViewModel();
	}

}