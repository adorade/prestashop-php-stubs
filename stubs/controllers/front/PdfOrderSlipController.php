<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class PdfOrderSlipControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'pdf-order-slip';
    /** @var bool */
    protected $display_header = \false;
    /** @var bool */
    protected $display_footer = \false;
    protected $order_slip;
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
