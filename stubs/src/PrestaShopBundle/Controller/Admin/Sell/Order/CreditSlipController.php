<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Responsible for Sell > Orders > Credit slips page
 */
class CreditSlipController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show credit slips listing page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CreditSlipFilters $creditSlipFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CreditSlipFilters $creditSlipFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.credit_slip')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactory $creditSlipGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.credit_slip_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $creditSlipOptionsFormHandler
    )
    {
    }
    /**
     * Generates PDF of requested credit slip by provided id
     *
     * @param int $creditSlipId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function generatePdfAction(
        int $creditSlipId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.credit_slip_pdf_generator')]
        \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator $creditSlipPdfGenerator
    )
    {
    }
    /**
     * Generates PDF of credit slips found by requested date range
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function generatePdfByDateAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.credit_slip_pdf_generator')]
        \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator $creditSlipPdfGenerator
    )
    {
    }
}
