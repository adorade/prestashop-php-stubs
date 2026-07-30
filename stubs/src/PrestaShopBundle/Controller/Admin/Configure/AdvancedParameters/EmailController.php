<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class EmailController is responsible for handling "Configure > Advanced Parameters > E-mail" page.
 */
class EmailController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show email configuration page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     * @param EmailLogsFilter $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\EmailLogsFilter $filters)
    {
    }
    /**
     * @deprecated since 8.0 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process email configuration saving.
     *
     * @DemoRestricted(redirectRoute="admin_emails_index")
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="Access denied."
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function saveOptionsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete selected email logs.
     *
     * @DemoRestricted(redirectRoute="admin_emails_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete all email logs.
     *
     * @DemoRestricted(redirectRoute="admin_emails_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return RedirectResponse
     */
    public function deleteAllAction()
    {
    }
    /**
     * Delete single email log.
     *
     * @DemoRestricted(redirectRoute="admin_emails_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param int $mailId
     *
     * @return RedirectResponse
     */
    public function deleteAction($mailId)
    {
    }
    /**
     * Processes test email sending.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function sendTestAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get email configuration form handler.
     *
     * @return FormHandlerInterface
     */
    protected function getEmailConfigurationFormHandler()
    {
    }
}
