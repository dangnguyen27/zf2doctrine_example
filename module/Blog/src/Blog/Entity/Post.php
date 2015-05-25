<?php
namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;


use Cocur\Slugify\Slugify; //thư viện cho phép tạo slug url ví dụ "đây là url" thành "day-la-url"

/**
* Post
*
*
* @ORM\Table(name="posts")
* @ORM\Entity
* @ORM\HasLifecycleCallbacks
*/
class Post implements InputFilterAwareInterface
{

	/**
	* @var integer
	* 
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column (name="title", type="string", nullable=false)
	*
	*/
	private $title;

	/**
	* @var string
	*
	* @ORM\Column (name="content", type="text",nullable=false)
	*/
	private $content;

	/**
	* @var string
	*
	* @ORM\Column (name="slug", type="string", nullable=false)
	*/
	private $slug;

	/**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

	/**
	*
	* @ORM\ManyToOne (targetEntity="Category")
	* @ORM\JoinColumn (name="cat_id", referencedColumnName="id")
	*/
	private $category;

	/**
	* Get id
	*
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* Set title
	*
	* @param string title
	* @return Post
	*/
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	* Get title
	*
	* @return string title
	*/
	public function getTitle()
	{
		return $this->title;
	}

	/**
	* Set content
	*
	* @param string $content
	* @return Post
	*/
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	* Get content
	*
	* @return text
	*/
	public function getContent()
	{
		return $this->content;
	}

	/**
	* Set category
	* 
	* @param Category $category
	* @return Post
	*/
	public function setCategory(Category $category)
	{
		$this->category = $category;

	}

	/**
	* Get Category
	* @return category
	*/
	public function getCategory()
	{
		return $this->category;
	}

	/**
	* Set slug
	*
	* @param slug
	*/
	public function setSlug()
	{
		
		$slugify = new Slugify();

		$this->slug = $slugify->slugify($this->title);
	}

	/**
	* Get slug
	*
	* @return string
	*/
	public function getSlug()
	{
		return $this->slug;
	}

	/**
    * @ORM\PrePersist
    */
    public function setCreatedDate()
    {
        $this->createdDate = new \DateTime('now');
    }

    /**
    * Get Created Date
    *
    * @return \DateTime
    */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
    * Exchange array - để sử dụng cho zend form
    *
    * @param array $data - mảng dữ liệu
    */
    public function exchangeArray($data)
    {
    	$this->id = (isset($data['id'])) ? $data['id'] : null;
    	$this->title = (isset($data['title'])) ? $data['title'] : null;
    	$this->slug = (isset($data['slug'])) ? $data['slug'] : null;
    	$this->content = (isset($data['content'])) ? $data['content'] : null;
    	$this->category = (isset($data['category'])) ? $data['category'] : null;
    	$this->createdDate = (isset($data['createdDate'])) ? $data['createdDate'] : null;
    }

    /**
    * Get an array coppy of object
    */
    public function getArrayCoppy()
    {
    	return get_object_vars($this);
    }

    /** 
    * Set input method
    */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
    	throw new \Exception("Not used"); // ném ra 1 ngoại lệ
    }

    /**
    * Get input filter - Lọc, kiểm tra dữ liệu
    */
    public function getInputFilter()
    {
    	if (!$this->inputFilter) {
    		$inputFilter = new InputFilter();
    		$factory = new InputFactory();

    		$inputFilter->add($factory->createInput(array(
    			'name' => 'id',
    			'required' => true,
    			'filters' => array(
    				array('name' => 'Int')
    			)
    		)));

    		$inputFilter->add($factory->createInput(array(
    			'name' => 'title',
    			'required' => true,
    			'filters' => array(
    				array('name' => 'StripTags'),
    				array('name' => 'StringTrim'),
    			),
    			'validators' => array(
    				array(
    					'name' => 'StringLength',
    					'options' => array(
    						'encoding' => 'UTF-8',
    						'min' => 1,
    						'max' => 255
    					)
    				)
    			)
    		)));

    		$inputFilter->add($factory->createInput(array(
                'name'     => 'content',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;
    	}

    	return $this->inputFilter;
    }
}