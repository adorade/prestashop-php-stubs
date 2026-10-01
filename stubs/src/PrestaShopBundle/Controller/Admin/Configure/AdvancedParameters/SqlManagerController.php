<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Database -> SQL Manager" page.
 */
class SqlManagerController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show list of saved SQL's.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\RequestSqlFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\RequestSqlFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.request_sql')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridLogFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.request_sql_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $settingsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process Request SQL settings save.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_sql_requests_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_sql_requests_index')]
    public function processFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.request_sql_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $settingsFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Show Request SQL create page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.', redirectRoute: 'admin_sql_requests_index')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.sql_request_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.sql_request_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Show Request SQL edit page.
     *
     * @param int $sqlRequestId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_sql_requests_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_sql_requests_index')]
    public function editAction(
        int $sqlRequestId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.sql_request_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.sql_request_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete selected Request SQL.
     *
     * @param int $sqlRequestId ID of selected Request SQL
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_sql_requests_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_sql_requests_index')]
    public function deleteAction(int $sqlRequestId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process bulk action delete of RequestSql's.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_sql_requests_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_sql_requests_index')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * View Request SQL query data.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $sqlRequestId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to view this.', redirectRoute: 'admin_sql_requests_index')]
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, int $sqlRequestId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Export Request SQL data.
     *
     * @param int $sqlRequestId Request SQL id
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_sql_requests_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_sql_requests_index')]
    public function exportAction(int $sqlRequestId, \PrestaShop\PrestaShop\Core\SqlManager\Exporter\SqlRequestExporter $sqlRequestExporter): \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    /**
     * Get MySQL table columns data.
     *
     * @param string $mySqlTableName Database table name
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_sql_requests_index')]
    public function ajaxTableColumnsAction(string $mySqlTableName): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * When "Export to SQL Manager" feature is used,
     * it adds "name" and "sql" to request's POST data
     * which is used as default form data
     * when creating SqlRequest.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    protected function getSqlRequestDataFromRequest(\Symfony\Component\HttpFoundation\Request $request): array
    {
    }
    /**
     * Get human readable error for exception.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e
     *
     * @return string Error message
     */
    protected function handleException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e): string
    {
    }
    /**
     * Get error message when exception occurs on View action.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e
     *
     * @return string
     */
    protected function handleViewException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e): string
    {
    }
    /**
     * @param \Exception $e
     *
     * @return string Error message
     */
    protected function handleExportException(\Exception $e): string
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Export\Exception\FileWritingException $e
     *
     * @return string Error message
     */
    protected function handleApplicationExportException(\PrestaShop\PrestaShop\Core\Export\Exception\FileWritingException $e): string
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e
     *
     * @return string
     */
    protected function handleDomainExportException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e): string
    {
    }
    /**
     * @return string[] Array of database tables
     */
    protected function getDatabaseTables(): array
    {
    }
    /**
     * Get SQL Request IDs from request for bulk actions.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return int[]
     */
    protected function getBulkSqlRequestFromRequest(\Symfony\Component\HttpFoundation\Request $request): array
    {
    }
}
