<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Class MetaController is responsible for page display and all actions used in Configure -> Shop parameters ->
 * Traffic & Seo -> Seo & Urls tab.
 */
class MetaController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Shows index Meta page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Used for applying filtering actions.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Points to the form where new record of meta list can be created.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to add this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Redirects to page where list record can be edited.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     *
     * @param int $metaId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($metaId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Removes single element from meta list.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param int $metaId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($metaId)
    {
    }
    /**
     * Removes multiple records from meta list.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processSetUpUrlsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processShopUrlsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processUrlSchemaFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processSeoOptionsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Generates robots.txt file for Front Office.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))"
     * )
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function generateRobotsFileAction()
    {
    }
    /**
     * @deprecated since 8.1.0 and will be removed in next major version.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters
     * @param \Symfony\Component\Form\FormInterface $setUpUrlsForm
     * @param \Symfony\Component\Form\FormInterface $shopUrlsForm
     * @param \Symfony\Component\Form\FormInterface $seoOptionsForm
     * @param \Symfony\Component\Form\FormInterface|null $urlSchemaForm
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\Form\FormInterface $setUpUrlsForm, \Symfony\Component\Form\FormInterface $shopUrlsForm, \Symfony\Component\Form\FormInterface $seoOptionsForm, ?\Symfony\Component\Form\FormInterface $urlSchemaForm = null): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Meta configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return \Symfony\Component\Form\FormInterface|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getSetUpUrlsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getShopUrlsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getUrlSchemaFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
     */
    protected function getSeoOptionsFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}
