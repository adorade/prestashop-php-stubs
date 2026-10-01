<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Import" step 2 page display.
 */
class ImportDataConfigurationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Shows import data page where the configuration of importable data and the final step of import is handled.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory,
        \PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory\DataRowCollectionFactoryInterface $dataRowCollectionFactory,
        \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowCollectionPresenterInterface $dataRowCollectionPresenter,
        \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderFinder $entityFieldsProviderFinder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.import_data_configuration.form_handler')]
        \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigFactoryInterface $importConfigFactory
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Create import data match configuration.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_import')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.import_data_configuration.form_handler')]
        \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigFactoryInterface $importConfigFactory,
        \PrestaShopBundle\Entity\Repository\ImportMatchRepository $importMatchRepository
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Delete import data match configuration.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_import')]
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Entity\Repository\ImportMatchRepository $importMatchRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Get import data match configuration.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_import')]
    public function getAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Entity\Repository\ImportMatchRepository $importMatchRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
