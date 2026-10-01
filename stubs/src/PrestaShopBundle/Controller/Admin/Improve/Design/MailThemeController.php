<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class MailThemeController manages mail theme generation, you can define the shop
 * mail theme, and regenerate mail in a specific language.
 *
 * Accessible via "Design > Mail Theme"
 */
class MailThemeController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Show mail theme settings and generation page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.mail_theme.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Manage generation form post and generate mails.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function generateMailsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Save mail theme configuration
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_mail_theme_index')]
    public function saveConfigurationAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.mail_theme.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Preview the list of layouts for a defined theme
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $theme
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function previewThemeAction(\Symfony\Component\HttpFoundation\Request $request, string $theme): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This action allows to send a test mail of a specific email template, however the Mail
     * class used to send emails is not modular enough to allow sending templates on the fly.
     * This would require either:
     *  - a little modification of the Mail class to add an easy way to send a template content (rather than its name)
     *  - a full refacto of the Mail class which wouldn't be coupled to static files any more
     *
     * These modifications will be performed in a future release so for now we can only send test emails
     * with the current email theme using generated static files.
     *
     * @param string $theme
     * @param string $layout
     * @param string $locale
     * @param string $module
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function sendTestMailAction(string $theme, string $layout, string $locale, string $module = ''): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function translateBodyAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.service.translation')]
        \PrestaShopBundle\Service\TranslationService $translationService
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Preview a mail layout from a defined theme
     *
     * @param string $theme
     * @param string $layout
     * @param string $type
     * @param string $locale
     * @param string $module
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function previewLayoutAction(string $theme, string $layout, string $type, string $locale, string $module = ''): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Display the raw source of a theme layout (mainly useful for developers/integrators)
     *
     * @param string $theme
     * @param string $layout
     * @param string $type
     * @param string $locale
     * @param string $module
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function rawLayoutAction(string $theme, string $layout, string $type, string $locale, string $module = ''): \Symfony\Component\HttpFoundation\Response
    {
    }
}
