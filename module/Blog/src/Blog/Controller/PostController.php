<?php

namespace Blog\Controller;


use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity;
use Zend\View\Model\ViewModel;

use Blog\Controller\EntityUsingController;
use Blog\Entity\Post;
use Blog\Entity\Category;
use Blog\Form\PostForm;

class PostController extends EntityUsingController
{
	/**
	* indexAction - trả về danh sách bài viết
	*/
	public function indexAction()
	{

		$em = $this->getEntityManager() ;// gọi entitymanager

		$posts = $em->getRepository('Blog\Entity\Post')->findBy(array(),array('createdDate'=>'DESC'));
		$categories = $em->getRepository('Blog\Entity\Category')->findBy(array(),array('name'=>'ASC'));
		
		return new ViewModel(array('posts'=>$posts,'categories'=>$categories));
	}

	public function viewAction()
	{
		$post = new Post;

		if ($this->params('id')>0) {
			$post = $this->getEntityManager()->getRepository('Blog\Entity\Post')->find($this->params('id'));
		}

		// var_dump($post);
		// exit();

		return new ViewModel(array('post'=>$post));
	}

	public function addAction()
	{
		$post = new Post;

		$form = new PostForm($this->getEntityManager());
		$form->setHydrator(new DoctrineEntity($this->getEntityManager(),'Blog\Entity\Post'));
		$form->bind($post);

		$request = $this->getRequest();
		if ($request->isPost()) {
			$form->setInputFilter($post->getInputFilter());
			
			// print "<pre>";
			// var_dump($request->getPost());
			// print "</pre>";
			// exit();
			
			$form->setData($request->getPost());

			if ($form->isValid()) {
				$em = $this->getEntityManager();
				
				$em->persist($post);
				$em->flush();

				return $this->redirect()->toRoute('post');
			}
		}

		return new ViewModel(array('post'=>$post,'form'=>$form));
	}

	public function editAction()
	{
		$post = new Post;

		if ($this->params('id') > 0) {
			$post = $this->getEntityManager()->getRepository('Blog\Entity\Post')->find($this->params('id'));
		}

		$form = new PostForm($this->getEntityManager());
		$form->setHydrator(new DoctrineEntity($this->getEntityManager(),'Blog\Entity\Post'));
		$form->bind($post);

		$request = $this->getRequest();
		if ($request->isPost()) {
			$form->setInputFilter($post->getInputFilter());
		
			
			$form->setData($request->getPost());

			if ($form->isValid()) {
				$em = $this->getEntityManager();
				
				$em->persist($post);
				$em->flush();

				return $this->redirect()->toRoute('post');
			}
		}

		return new ViewModel(array('post'=>$post,'form'=>$form));

	}

	public function deleteAction()
	{
		if ($this->params('id') > 0) {
			$post = $this->getEntityManager()->getRepository('Blog\Entity\Post')->find($this->params('id'));
		}

		if ($post) {
			$em = $this->getEntityManager();
			$em->remove($post);
			$em->flush();
		}
		return $this->redirect()->toRoute('post');
	}


}