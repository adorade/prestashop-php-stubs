<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Database -> SQL Manager" page.
 */
class SqlManagerController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show list of saved SQL's.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param RequestSqlFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\RequestSqlFilters $filters)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute="admin_sql_requests_index")
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process Request SQL settings save.
     *
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *      redirectRoute="admin_sql_requests_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show Request SQL create page.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *      message="You do not have permission to create this.",
     *      redirectRoute="admin_sql_requests_index"
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show Request SQL edit page.
     *
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_sql_requests_index"
     * )
     *
     * @param int $sqlRequestId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $sqlRequestId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete selected Request SQL.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to delete this.",
     *     redirectRoute="admin_sql_requests_index"
     * )
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     *
     * @param int $sqlRequestId ID of selected Request SQL
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $sqlRequestId)
    {
    }
    /**
     * Process bulk action delete of RequestSql's.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to delete this.",
     *     redirectRoute="admin_sql_requests_index"
     * )
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * View Request SQL query data.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     message="You do not have permission to view this.",
     *     redirectRoute="admin_sql_requests_index"
     * )
     *
     * @param Request $request
     * @param int $sqlRequestId
     *
     * @return Response
     */
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, int $sqlRequestId)
    {
    }
    /**
     * Export Request SQL data.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_sql_requests_index"
     * )
     * @DemoRestricted(redirectRoute="admin_sql_requests_index")
     *
     * @param int $sqlRequestId Request SQL id
     *
     * @return RedirectResponse|BinaryFileResponse
     */
    public function exportAction(int $sqlRequestId)
    {
    }
    /**
     * Get MySQL table columns data.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_sql_requests_index"
     * )
     *
     * @param string $mySqlTableName Database table name
     *
     * @return JsonResponse
     */
    public function ajaxTableColumnsAction($mySqlTableName)
    {
    }
    /**
     * Get request SQL repository.
     *
     * @return \PrestaShopBundle\Entity\Repository\RequestSqlRepository
     */
    protected function getRepository()
    {
    }
    /**
     * Get Request SQL settings form handler.
     *
     * @return FormHandlerInterface
     */
    protected function getSettingsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface
     */
    protected function getSqlRequestFormHandler()
    {
    }
    /**
     * @return FormBuilderInterface
     */
    protected function getSqlRequestFormBuilder()
    {
    }
    /**
     * When "Export to SQL Manager" feature is used,
     * it adds "name" and "sql" to request's POST data
     * which is used as default form data
     * when creating SqlRequest.
     *
     * @param Request $request
     *
     * @return array
     */
    protected function getSqlRequestDataFromRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get human readable error for exception.
     *
     * @param SqlRequestException $e
     *
     * @return string Error message
     */
    protected function handleException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e)
    {
    }
    /**
     * Get error message when exception occurs on View action.
     *
     * @param SqlRequestException $e
     *
     * @return string
     */
    protected function handleViewException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e)
    {
    }
    /**
     * @param Exception $e
     *
     * @return string Error message
     */
    protected function handleExportException(\Exception $e)
    {
    }
    /**
     * @param FileWritingException $e
     *
     * @return string Error message
     */
    protected function handleApplicationExportException(\PrestaShop\PrestaShop\Core\Export\Exception\FileWritingException $e)
    {
    }
    /**
     * @param SqlRequestException $e
     *
     * @return string
     */
    protected function handleDomainExportException(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException $e)
    {
    }
    /**
     * @return string[] Array of database tables
     */
    protected function getDatabaseTables()
    {
    }
    /**
     * Get SQL Request IDs from request for bulk actions.
     *
     * @param Request $request
     *
     * @return int[]
     */
    protected function getBulkSqlRequestFromRequest(\Symfony\Component\HttpFoundation\Request $request): array
    {
    }
}
