<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\Repository;

class ManufacturerRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerNotFoundException
     */
    public function assertManufacturerExists(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId): void
    {
    }
}
