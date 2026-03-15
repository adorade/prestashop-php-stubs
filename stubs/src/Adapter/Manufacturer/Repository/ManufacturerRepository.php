<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\Repository;

class ManufacturerRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param ManufacturerId $manufacturerId
     *
     * @throws ManufacturerNotFoundException
     */
    public function assertManufacturerExists(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId): void
    {
    }
}
