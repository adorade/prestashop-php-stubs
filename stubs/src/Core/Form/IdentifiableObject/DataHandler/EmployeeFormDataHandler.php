<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted employee form's data.
 */
final class EmployeeFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, array $defaultShopAssociation, $superAdminProfileId, \PrestaShop\PrestaShop\Core\Employee\Access\EmployeeFormAccessCheckerInterface $employeeFormAccessChecker, \PrestaShop\PrestaShop\Core\Employee\EmployeeDataProviderInterface $employeeDataProvider, \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $imageUploader, int $minLength, int $maxLength, int $minScore, bool $boAllowEmployeeFormLang, \Cookie $legacyContextCookie, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private readonly \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository, private readonly \PrestaShopBundle\Security\Admin\UserTokenManager $userTokenManager, private readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager)
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
