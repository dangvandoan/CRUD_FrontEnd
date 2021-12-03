<?php
namespace AHTCRUD\Blog\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\AHTCRUD\Blog\Model\PostRepository $postRepository,
		\AHTCRUD\Blog\Model\PostFactory $postFactory
		)
	{
		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
	}

	public function getBlogInfo()
	{
		return __('AHT Blog module');
	}
	public function getPosts()
	{
		$collection = $this->postRepository->getList();
		// $collection = $post->getCollection();
		return $collection;
	}

}