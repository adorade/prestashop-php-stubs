<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\Validate;

/**
 * Validates carrier properties using legacy object model
 */
class CarrierValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    protected const AVAILABLE_IMAGE_MIMETYPE = ['image/jpeg'];
    protected const MAX_IMAGE_SIZE_IN_BYTES = 8 * 1000000;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $groupRepository, private readonly \PrestaShop\PrestaShop\Adapter\Zone\Repository\ZoneRepository $zoneRepository)
    {
    }
    /**
     * @param \Carrier $carrier
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validate(\Carrier $carrier): void
    {
    }
    public function validateLogoUpload(string $filePath): void
    {
    }
    public function validateGroupsExist(array $groupIds): void
    {
    }
    /**
     * @param int[] $zoneIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneNotFoundException
     */
    public function validateZonesExist(array $zoneIds): void
    {
    }
}
