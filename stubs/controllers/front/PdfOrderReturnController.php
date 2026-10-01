<?php

class PdfOrderReturnControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'pdf-order-return';
    /** @var bool */
    protected $display_header = \false;
    /** @var bool */
    protected $display_footer = \false;
    /**
     * @var OrderReturn|null
     */
    public $orderReturn;
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
