<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Class CurrencyController is responsible for handling "Improve -> International -> Localization -> Currencies" page.
 */
class CurrencyController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Show currency page.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CurrencyFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\CurrencyFilters $filters,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.currency')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $currencyGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.currency_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $settingsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays and handles currency form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index', message: 'You need permission to create this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.currency_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $currencyFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.currency_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $currencyFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays currency form.
     *
     * @param int $currencyId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index', message: 'You need permission to edit this.')]
    public function editAction(
        int $currencyId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.currency_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $currencyFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.currency_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $currencyFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes currency.
     *
     * @param int $currencyId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index', message: 'You need permission to delete this.')]
    public function deleteAction(int $currencyId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Get the data for a currency (from CLDR)
     *
     * @param string $currencyIsoCode
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getReferenceDataAction(string $currencyIsoCode): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggles status.
     *
     * @param int $currencyId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index', message: 'You need permission to edit this.')]
    public function toggleStatusAction(int $currencyId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Refresh exchange rates.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index', message: 'You need permission to edit this.')]
    public function refreshExchangeRatesAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Handles ajax request which updates live exchange rates.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateLiveExchangeRatesAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.currency_settings.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $settingsFormHandler
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggles currencies status in bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $status
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index')]
    public function bulkToggleStatusAction(\Symfony\Component\HttpFoundation\Request $request, string $status): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes currencies in bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_currencies_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_currencies_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
