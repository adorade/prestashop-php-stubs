<?php

namespace PrestaShop\PrestaShop\Core\Search;

/**
 * Retrieve filters parameters if any from the User request.
 *
 * @deprecated Use FiltersBuilderInterface instead
 */
final class SearchParameters implements \PrestaShop\PrestaShop\Core\Search\SearchParametersInterface
{
    public function __construct(\PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFiltersFromRequest(\Symfony\Component\HttpFoundation\Request $request, $filterClass)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFiltersFromRepository($employeeId, $shopId, $controller, $action, $filterClass)
    {
    }
}
