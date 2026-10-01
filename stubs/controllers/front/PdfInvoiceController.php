<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class PdfInvoiceControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'pdf-invoice';
    /** @var bool */
    protected $display_header = \false;
    /** @var bool */
    protected $display_footer = \false;
    /** @var bool */
    public $content_only = \true;
    /** @var string */
    protected $template = '';
    public $filename;
    /** @var Order */
    public $order;
    public function postProcess(): void
    {
    }
    /**
     * @return void
     *
     * @throws PrestaShopException
     */
    public function display(): void
    {
    }
}
