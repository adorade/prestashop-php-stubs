<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject;

/**
 * Provides manufacturer id
 */
class ManufacturerId implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerIdInterface
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @param int $id
     *
     * @throws ManufacturerConstraintException
     */
    public function __construct($id)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
    }
}
