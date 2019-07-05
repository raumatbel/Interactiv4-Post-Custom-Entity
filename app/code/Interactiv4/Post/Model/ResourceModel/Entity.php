<?php
/**
 * @author Interactiv4 Team
 * @copyright Copyright (c) 2017 Interactiv4 (https://www.interactiv4.com)
 * @package Interactiv4_Post
 */

namespace Interactiv4\Post\Model\ResourceModel;

use Interactiv4\Post\Api\Data\EntityInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Entity
 */
class Entity extends AbstractDb
{
    /**
     * Initialize resource model
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init(EntityInterface::TABLE, EntityInterface::ID);
    }
}
