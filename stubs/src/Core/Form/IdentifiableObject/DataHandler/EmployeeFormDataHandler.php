<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted employee form's data.
 */
final class EmployeeFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $bus
     * @param array $defaultShopAssociation
     * @param int $superAdminProfileId
     * @param EmployeeFormAccessCheckerInterface $employeeFormAccessChecker
     * @param EmployeeDataProviderInterface $employeeDataProvider
     * @param Hashing $hashing
     * @param ImageUploaderInterface $imageUploader
     * @param int $minLength
     * @param int $maxLength
     * @param int $minScore
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, array $defaultShopAssociation, $superAdminProfileId, \PrestaShop\PrestaShop\Core\Employee\Access\EmployeeFormAccessCheckerInterface $employeeFormAccessChecker, \PrestaShop\PrestaShop\Core\Employee\EmployeeDataProviderInterface $employeeDataProvider, \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $imageUploader, int $minLength, int $maxLength, int $minScore)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
    }
}
