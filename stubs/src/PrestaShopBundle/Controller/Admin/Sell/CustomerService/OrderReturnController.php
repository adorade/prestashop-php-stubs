<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * OrderReturnController backs the "Sell > Customer Service > Merchandise Returns" admin page.
 *
 * The user-facing label remains "Merchandise Returns"; the canonical domain name is OrderReturn.
 */
class OrderReturnController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Render the order returns grid and the options block.
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.order_return')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\OrderReturnFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order_return_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $optionFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit existing order return
     *
     * @param int $orderReturnId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function editAction(
        int $orderReturnId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.order_return_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.order_return_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Streams the merchant-facing return PDF.
     *
     * Mirrors the legacy gating: the PDF is only available when the merchandise return is in
     * the "Waiting for package" state (id 2). For any other state the user is bounced back to
     * the edit page with a flash error rather than served a misleading document.
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function downloadPdfAction(
        int $orderReturnId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.order_return.repository.order_return_repository')]
        \PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.order_return_pdf_generator')]
        \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface $pdfGenerator
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes a single merchandise return from the grid row action.
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_merchandise_returns_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You need permission to delete this.', redirectRoute: 'admin_merchandise_returns_index')]
    public function deleteAction(int $orderReturnId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes the merchandise returns selected via the grid bulk checkboxes.
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_merchandise_returns_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
