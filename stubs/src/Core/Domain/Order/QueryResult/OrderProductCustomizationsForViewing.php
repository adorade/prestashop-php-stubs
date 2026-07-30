<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderProductCustomizationsForViewing
{
    /**
     * @param OrderProductCustomizationForViewing[] $customizations
     */
    public function __construct(array $customizations)
    {
    }
    /**
     * Returns customizations of type FILE
     *
     * @return OrderProductCustomizationForViewing[]
     */
    public function getFileCustomizations(): array
    {
    }
    /**
     * Returns customizations of type TEXT
     *
     * @return OrderProductCustomizationForViewing[]
     */
    public function getTextCustomizations(): array
    {
    }
}
