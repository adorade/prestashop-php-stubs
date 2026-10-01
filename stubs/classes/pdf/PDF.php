<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    /** @deprecated since 9.0 and will be removed in 10.0 **/
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
