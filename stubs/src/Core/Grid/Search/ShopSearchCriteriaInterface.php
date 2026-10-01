<?php

namespace PrestaShop\PrestaShop\Core\Grid\Search;

/**
 * This extended interface of the SearchCriteriaInterface integrates a mandatory ShopConstraint
 * which is used for multishop feature.
 */
interface ShopSearchCriteriaInterface extends \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface
{
    public function getShopConstraint(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint;
}
