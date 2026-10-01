<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetDiscountTypesHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\QueryHandler\GetDiscountTypesHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult\DiscountType[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Query\GetDiscountTypes $query): array
    {
    }
}
