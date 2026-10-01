<?php

class HistoryControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'history';
    /** @var string */
    public $authRedirection = 'history';
    /** @var bool */
    public $ssl = \true;
    /** @var \PrestaShop\PrestaShop\Adapter\Presenter\Order\OrderPresenter|null */
    public $order_presenter;
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    public function getTemplateVarOrders(): array
    {
    }
    /**
     * Generates a URL to download the PDF invoice of a given order
     *
     * @param Order $order
     * @param Context $context
     *
     * @return string
     */
    public static function getUrlToInvoice(\Order $order, \Context $context)
    {
    }
    /**
     * Generates a URL to reorder a given order
     *
     * @param int $id_order
     * @param Context $context
     *
     * @return string
     */
    public static function getUrlToReorder(int $id_order, \Context $context)
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
