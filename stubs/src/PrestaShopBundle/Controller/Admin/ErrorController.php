<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Manages Error pages (e.g. 500)
 */
class ErrorController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Enables debug mode from error page (500 for example)
     *
     * @AdminSecurity(
     *     "is_granted('update', 'AdminPerformance') && is_granted('create', 'AdminPerformance') && is_granted('delete', 'AdminPerformance')"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function enableDebugModeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
