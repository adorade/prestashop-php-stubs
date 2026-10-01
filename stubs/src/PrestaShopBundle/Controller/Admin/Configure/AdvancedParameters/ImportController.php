<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Import" page display.
 */
class ImportController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show import form & handle forwarding to legacy controller.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function importAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDir,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.import.form_handler')]
        \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Import\File\FileFinder $finder,
        \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigFactoryInterface $importConfigFactory,
        \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
    ): \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Handle import file upload via AJAX, sending authorization errors in JSON.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function uploadAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Import\File\FileUploader $fileUploader): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Delete import file.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_import')]
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Import\File\FileRemoval $fileRemoval): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Download import file from history.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_import')]
    public function downloadAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory): \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    /**
     * Download import sample file.
     *
     * @param string $sampleName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_import')]
    public function downloadSampleAction(string $sampleName, \PrestaShop\PrestaShop\Core\Import\Sample\SampleFileProvider $sampleFileProvider): \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    /**
     * Get available entity fields.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_import')]
    public function getAvailableEntityFieldsAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderFinder $fieldsProviderFinder): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Process the import.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_import')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_import')]
    public function processImportAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Import\Validator\ImportRequestValidatorInterface $requestValidator, \PrestaShop\PrestaShop\Core\Import\ImporterInterface $importer, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigFactoryInterface $importConfigFactory, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigFactoryInterface $runtimeConfigFactory, \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerFinderInterface $importHandlerFinder): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Get generic template parameters.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    protected function getTemplateParams(\Symfony\Component\HttpFoundation\Request $request): array
    {
    }
}
