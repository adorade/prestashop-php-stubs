<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider;

class DiscountFormOptionsProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider\FormOptionsProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    public function getOptions(int $id, array $data): array
    {
    }
    public function getDefaultOptions(array $data): array
    {
    }
}
