<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Decorates attachment grid data factory
 */
final class AttachmentGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param GridDataFactoryInterface $attachmentDoctrineGridDataFactory
     * @param int $employeeIdLang
     * @param Connection $connection
     * @param string $dbPrefix
     * @param FileSizeConverter $fileSizeConverter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $attachmentDoctrineGridDataFactory, int $employeeIdLang, \Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Core\Util\File\FileSizeConverter $fileSizeConverter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
