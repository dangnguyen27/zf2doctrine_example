<?php 

namespace Blog\View\Helper;

use Zend\View\Helper\AbstractHelper;

class ThumbnailHelper extends AbstractHelper
{

	public function __invoke($text) 
	{
		preg_match('/<img.+src=[\'"](?P<src>.+)[\'"].*>/i', $text, $image);

		return $image['src'];
	}

}