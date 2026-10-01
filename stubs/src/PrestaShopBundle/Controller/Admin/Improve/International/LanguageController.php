<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class LanguageController manages "Improve > International > Localization > Languages".
 */
#[\PrestaShopBundle\Controller\Attribute\AllShopContext]
class LanguageController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show languages listing page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\LanguageFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\LanguageFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.language')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $languageGridFactory,
        \PrestaShop\PrestaShop\Core\Util\Url\UrlFileCheckerInterface $urlFileChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show language creation form page and handle its submit.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.language_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $languageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.language_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $languageFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show language edit form page and handle its submit.
     *
     * @param int $languageId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_languages_index')]
    public function editAction(
        int $languageId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.language_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $languageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.language_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $languageFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes language
     *
     * @param int $languageId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_languages_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_languages_index')]
    public function deleteAction(int $languageId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes languages in bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_languages_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_languages_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles language status
     *
     * @param int $languageId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_languages_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_languages_index')]
    public function toggleStatusAction(int $languageId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles languages status in bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $status
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_languages_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_languages_index')]
    public function bulkToggleStatusAction(\Symfony\Component\HttpFoundation\Request $request, string $status): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
