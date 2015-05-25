<?php
namespace Blog\Controller;

use Zend\View\Model\ViewModel;

use Blog\Entity\Post;
use Blog\Entity\Category;
use Blog\Controller\EntityUsingController;

class CategoryController extends EntityUsingController
{
	public function indexAction()
	{
		
		$categories = $this->getEntityManager()->getRepository('Blog\Entity\Category')->findBy(array(),array('name'=>'ASC')); //tương đương với câu truy vấn SELECT * FROM categories ORDER BY name ASC

		return new ViewModel(array('categories'=>$categories));
	}

	public function viewpostsAction()
	{

		$category = $this->getEntityManager()->getRepository('Blog\Entity\Category')->find($this->params('id'));
		$posts = $this->getEntityManager()->getRepository('Blog\Entity\Post')->findBy(array('category'=>$category->getId()),array('title'=>'ASC')); //tương dduwog vơi câu truy vấn SELECT * FROM posts JOIN categories ON posts.cat_id=category.id WHERE category.id=id ORDER BY posts.title ASC
	
		return new ViewModel(array('category'=>$category,'posts'=>$posts));
	}

}