<?php
namespace AHTCRUD\Blog\Model;

use AHTCRUD\Blog\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, PostInterface
{
	const CACHE_TAG = 'aht_blog_post';

	protected $_cacheTag = 'aht_blog_post';

	protected $_eventPrefix = 'aht_blog_post';

	protected function _construct()
	{
		$this->_init('AHTCRUD\Blog\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}