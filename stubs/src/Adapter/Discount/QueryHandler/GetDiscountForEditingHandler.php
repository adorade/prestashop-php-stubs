<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetDiscountForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\QueryHandler\GetDiscountForEditingHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    /**
     * @throws \Exception
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Query\GetDiscountForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult\DiscountForEditing
    {
    }
}
