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
/**
 * @since 1.5
 */
class PDFCore
{
    /**
     * @var string
     */
    public $filename;
    /**
     * @var PDFGenerator
     */
    public $pdf_renderer;
    /**
     * @var PrestaShopCollection|ObjectModel|array
     */
    public $objects;
    /**
     * @var string
     */
    public $template;
    /**
     * @var bool
     */
    public $send_bulk_flag = \false;
    /**
     * @var Smarty
     */
    protected $smarty;
    public const TEMPLATE_INVOICE = 'Invoice';
    public const TEMPLATE_ORDER_RETURN = 'OrderReturn';
    public const TEMPLATE_ORDER_SLIP = 'OrderSlip';
    public const TEMPLATE_DELIVERY_SLIP = 'DeliverySlip';
    public const TEMPLATE_SUPPLY_ORDER_FORM = 'SupplyOrderForm';
    /**
     * @param PrestaShopCollection|ObjectModel|array $objects
     * @param string $template
     * @param Smarty $smarty
     * @param string $orientation
     */
    public function __construct($objects, $template, $smarty, $orientation = 'P')
    {
    }
    /**
     * Render PDF.
     *
     * @param bool $display
     *
     * @return string|void
     *
     * @throws PrestaShopException
     */
    public function render($display = \true)
    {
    }
    /**
     * Get correct PDF template classes.
     *
     * @param mixed $object
     *
     * @return HTMLTemplate|false
     *
     * @throws PrestaShopException
     */
    public function getTemplateObject($object)
    {
    }
    /**
     * Get the PDF filename based on the objects.
     *
     * @return string
     */
    public function getFilename(): string
    {
    }
    /**
     * Set the PDF filename based on the objects.
     *
     * @return bool
     */
    public function setFilename(): bool
    {
    }
}
