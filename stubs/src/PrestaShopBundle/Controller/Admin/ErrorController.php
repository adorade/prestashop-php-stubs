<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Manages Error pages (e.g. 500)
 */
class ErrorController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Enables debug mode from error page (500 for example)
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminPerformance') && is_granted('create', 'AdminPerformance') && is_granted('delete', 'AdminPerformance')")]
    public function enableDebugModeAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    public function showAction(\Throwable $exception): \Symfony\Component\HttpFoundation\Response
    {
    }
}
