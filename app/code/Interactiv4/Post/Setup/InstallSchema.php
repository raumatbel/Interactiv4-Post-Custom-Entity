<?php
/**
 * @author Interactiv4 Team
 * @copyright Copyright (c) 2017 Interactiv4 (https://www.interactiv4.com)
 * @package Interactiv4_Post
 */

namespace Interactiv4\Post\Setup;

use Interactiv4\Post\Api\Data\EntityInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable(EntityInterface::TABLE)
        )->addColumn(
            EntityInterface::ID,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Id'
        )->addColumn(
            EntityInterface::NAME,
            Table::TYPE_TEXT,
            255,
            ['nullable' => true],
            'Name'
        )->addColumn(
            EntityInterface::DESCRIPTION,
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Description'
        )->setComment(
            'Custom Entity'
        );
        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
