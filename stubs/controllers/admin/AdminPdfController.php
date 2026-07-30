<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class AdminPdfControllerCore extends \AdminController
{
    public function postProcess()
    {
    }
    public function initProcess()
    {
    }
    public function checkCacheFolder()
    {
    }
    public function processGenerateInvoicePdf()
    {
    }
    public function processGenerateOrderSlipPDF()
    {
    }
    public function processGenerateDeliverySlipPDF()
    {
    }
    public function processGenerateInvoicesPDF()
    {
    }
    public function processGenerateInvoicesPDF2()
    {
    }
    public function processGenerateOrderSlipsPDF()
    {
    }
    public function processGenerateDeliverySlipsPDF()
    {
    }
    public function processGenerateSupplyOrderFormPDF()
    {
    }
    /**
     * @deprecated Since 8.1.0, use the route `admin_orders_generate_delivery_slip_pdf` instead.
     *
     * @param int $id_order
     *
     * @return void
     */
    public function generateDeliverySlipPDFByIdOrder($id_order)
    {
    }
    public function generateDeliverySlipPDFByIdOrderInvoice($id_order_invoice)
    {
    }
    /**
     * @deprecated Since 8.1.0, use the route `admin_orders_generate_invoice_pdf` instead.
     *
     * @param int $id_order
     *
     * @return void
     */
    public function generateInvoicePDFByIdOrder($id_order)
    {
    }
    public function generateInvoicePDFByIdOrderInvoice($id_order_invoice)
    {
    }
    public function generatePDF($object, $template)
    {
    }
}
