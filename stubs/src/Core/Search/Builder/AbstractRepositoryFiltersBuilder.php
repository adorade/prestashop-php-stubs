<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * Basic abstract class for filters related to the database, whether they need to persist
 * or search for filters. It is created with all the necessary services and configuration
 * including the context (employee + shop), and it can extract the filters matching from
 * the config or the request (either via filter_id or via controller/action matching).
 */
abstract class AbstractRepositoryFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /** @var \PrestaShopBundle\Entity\Repository\AdminFilterRepository */
    protected $adminFilterRepository;
    /** @var \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface */
    protected $employeeProvider;
    /** @var int */
    protected $shopId;
    /** @var string */
    protected $controller;
    /** @var string */
    protected $action;
    /**
     * @param \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository
     * @param \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $employeeProvider
     * @param int $shopId
     */
    public function __construct(\PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository, \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $employeeProvider, $shopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
}
