<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class BackupController is responsible for "Configure > Advanced Parameters > Database > Backup" page.
 */
class BackupController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_products_index')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\BackupFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.backup')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $backupsGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.backup.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $backupFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backups_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function downloadViewAction(\Symfony\Component\HttpFoundation\Request $request, string $downloadFileName): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backup')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function downloadContentAction(string $downloadFileName): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backups_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_backups_index')]
    public function saveOptionsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.backup.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $backupFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backups_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.', redirectRoute: 'admin_backups_index')]
    public function createAction(\PrestaShop\PrestaShop\Core\Backup\Manager\BackupCreatorInterface $backupCreator): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backups_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_backups_index')]
    public function deleteAction(string $deleteFileName, \PrestaShop\PrestaShop\Core\Backup\Manager\BackupRemoverInterface $backupRemover): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_backups_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_backups_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Backup\Manager\BackupRemoverInterface $backupRemover): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
