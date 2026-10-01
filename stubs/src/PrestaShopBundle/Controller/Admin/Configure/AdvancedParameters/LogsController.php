<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Logs" page display.
 */
class LogsController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\LogsFilters $filters the list of filters from the request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\LogsFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.log_factory')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridLogFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.logs.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.logs_database.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $databaseFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_logs_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_logs_index')]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.logs')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_logs_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_logs_index')]
    public function saveSettingsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.logs.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_logs_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_logs_index')]
    public function saveDatabaseSettingsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.logs_database.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_logs_index')]
    public function deleteAllAction(\PrestaShopBundle\Entity\Repository\LogRepository $logRepository): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
