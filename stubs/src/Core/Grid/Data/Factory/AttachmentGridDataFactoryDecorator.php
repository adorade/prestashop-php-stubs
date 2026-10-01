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
     * @param \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Core\Util\File\FileSizeConverter $fileSizeConverter
     */
    public function __construct(private \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $attachmentDoctrineGridDataFactory, private \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private \Doctrine\DBAL\Connection $connection, private string $dbPrefix, private \PrestaShop\PrestaShop\Core\Util\File\FileSizeConverter $fileSizeConverter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
