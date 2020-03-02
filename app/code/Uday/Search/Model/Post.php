<?php
namespace Uday\Search\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'uday_search_post';

    protected $_cacheTag = 'uday_search_post';

    protected $_eventPrefix = 'uday_search_post';

    protected function _construct()
    {
        $this->_init('Uday\Search\Model\ResourceModel\Post');
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