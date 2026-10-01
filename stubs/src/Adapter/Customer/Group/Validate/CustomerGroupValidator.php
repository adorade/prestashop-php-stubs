<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\Validate;

class CustomerGroupValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    /**
     * @param \Group $customerGroup
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupConstraintException
     */
    public function validate(\Group $customerGroup): void
    {
    }
}
