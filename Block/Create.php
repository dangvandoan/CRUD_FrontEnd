<?php

namespace AHTCRUD\Blog\Block;

class Create extends \Magento\Framework\View\Element\Template
{
    private $postFactory;
    private $postRepository;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \AHTCRUD\Blog\Model\PostFactory $postFactory,
        \AHTCRUD\Blog\Model\PostRepository $postRepository
    ) {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }
}
