<?php
namespace AHTCRUD\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{
    /**
     * Save Post.
     *
     * @param \AHTCRUD\Blog\Api\Data\PostInterface $Post
     * @return \AHTCRUD\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\AHTCRUD\Blog\Api\Data\PostInterface $Post);

    /**
     * Retrieve Post.
     *
     * @param int $PostId
     * @return \AHTCRUD\Blog\Api\Data\PostInterface
     * @throws \AHTCRUD\Framework\Exception\LocalizedException
     */
    public function getById($PostId);

    /**
     * Retrieve Posts matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AHTCRUD\Blog\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    // public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete Post.
     *
     * @param \AHTCRUD\Blog\Api\Data\PostInterface $Post
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\AHTCRUD\Blog\Api\Data\PostInterface $Post);

    /**
     * Delete Post by ID.
     *
     * @param int $PostId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($PostId);
}