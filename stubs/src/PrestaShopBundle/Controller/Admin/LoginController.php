<?php

namespace PrestaShopBundle\Controller\Admin;

class LoginController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly string $projectDir, private readonly string $adminFolderName)
    {
    }
    /**
     * This route and controller are defined in the firewall as login_path and check_path
     * so the controller doesn't need to handle the form submission logic, it is handled
     * internally by the FormLoginAuthenticator
     *
     * See https://symfony.com/doc/current/security.html#form-login
     *
     * @param \Symfony\Bundle\SecurityBundle\Security $security
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \Symfony\Bundle\SecurityBundle\Security $security,
        \Symfony\Component\Security\Http\Authentication\AuthenticationUtils $authenticationUtils,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.login.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $loginFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.request_password_reset.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $requestResetPasswordFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This controller is not even called since the logout_path is defined in the firewall
     * so the logout path is watched and Symfony handles the logout part and the redirection
     * but we still need to define a route to benefit from the _legacy_link feature so it
     * doesn't hurt to have a consistent controller here anyway.
     *
     * See https://symfony.com/doc/current/security.html#logging-out
     *
     * @param \Symfony\Bundle\SecurityBundle\Security $security
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function logoutAction(\Symfony\Bundle\SecurityBundle\Security $security): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Automatically redirects to the Employee configured homepage, or AdminDashboard
     * as a fallback, or to the login in case the employee is not logged in.
     */
    public function homepageAction(\Symfony\Bundle\SecurityBundle\Security $security, \PrestaShopBundle\Security\Admin\EmployeeHomepageProvider $employeeHomepageProvider): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    public function requestPasswordResetAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.login.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $loginFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.request_password_reset.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $requestResetPasswordFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    public function resetPasswordAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.reset_password.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $resetPasswordFormHandler,
        \Symfony\Component\HttpFoundation\Request $request,
        string $resetToken
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    protected function renderLoginPage(\Symfony\Component\Form\FormInterface $loginForm, \Symfony\Component\Form\FormInterface $requestPasswordResetForm, bool $showRequestPasswordResetForm): \Symfony\Component\HttpFoundation\Response
    {
    }
    protected function checkRequiredActions(\Symfony\Component\HttpFoundation\Request $request): ?\Symfony\Component\HttpFoundation\Response
    {
    }
}
