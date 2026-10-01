<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class ProfileGridDataFactory decorates data from profile doctrine data factory.
 */
final class ProfileGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $profileGridDataFactory, \Symfony\Component\Security\Core\Security $security)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
