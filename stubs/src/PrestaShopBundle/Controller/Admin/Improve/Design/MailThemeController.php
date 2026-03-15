<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class MailThemeController manages mail theme generation, you can define the shop
 * mail theme, and regenerate mail in a specific language.
 *
 * Accessible via "Design > Mail Theme"
 */
class MailThemeController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show mail theme settings and generation page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Manage generation form post and generate mails.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function generateMailsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Save mail theme configuration
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function saveConfigurationAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Preview the list of layouts for a defined theme
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param string $theme
     *
     * @return Response
     *
     * @throws InvalidArgumentException
     */
    public function previewThemeAction(\Symfony\Component\HttpFoundation\Request $request, $theme)
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
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param string $theme
     * @param string $layout
     * @param string $locale
     * @param string $module
     *
     * @return Response
     *
     * @throws InvalidArgumentException
     */
    public function sendTestMailAction($theme, $layout, $locale, $module = '')
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function translateBodyAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Preview a mail layout from a defined theme
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param string $theme
     * @param string $layout
     * @param string $type
     * @param string $locale
     * @param string $module
     *
     * @return Response
     *
     * @throws FileNotFoundException
     * @throws InvalidArgumentException
     */
    public function previewLayoutAction($theme, $layout, $type, $locale, $module = '')
    {
    }
    /**
     * Display the raw source of a theme layout (mainly useful for developers/integrators)
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param string $theme
     * @param string $layout
     * @param string $type
     * @param string $locale
     * @param string $module
     *
     * @return Response
     *
     * @throws FileNotFoundException
     * @throws InvalidArgumentException
     */
    public function rawLayoutAction($theme, $layout, $type, $locale, $module = '')
    {
    }
}
