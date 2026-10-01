<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

final class QuickAccessFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    public function getData($quickAccessId): array
    {
    }
    public function getDefaultData(): array
    {
    }
}
