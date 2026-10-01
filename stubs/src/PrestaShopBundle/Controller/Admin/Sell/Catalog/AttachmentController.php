<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class is responsible for "Sell > Catalog > Files" page.
 */
class AttachmentController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\AttachmentFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.attachment')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $attachmentGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new" form and handle form submit.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_attachments_index', message: 'You do not have permission to create this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.attachment_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attachmentFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.attachment_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attachmentFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process attachment editing.
     *
     * @param int $attachmentId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_attachments_index', message: 'You do not have permission to edit this.')]
    public function editAction(
        int $attachmentId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.attachment_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attachmentFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.attachment_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attachmentFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * View attachment.
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_attachments_index', message: 'You do not have permission to edit this.')]
    public function viewAction(int $attachmentId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes attachment
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_attachments_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attachments_index')]
    public function deleteAction(int $attachmentId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete attachments in bulk action.
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attachments_index', message: 'You do not have permission to delete this.')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $attachmentId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminAttachments')")]
    public function getAttachmentInfoAction(int $attachmentId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param string $searchPhrase
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminAttachments')")]
    public function searchAction(string $searchPhrase): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
