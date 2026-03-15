<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class LogDataFactory decorates DoctrineGridDataFactory configured for logs to modify log records.
 */
final class LogDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $dataFactory
     * @param TranslatorInterface $translator
     * @param AvatarProviderInterface $avatarProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Employee\AvatarProviderInterface $avatarProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
