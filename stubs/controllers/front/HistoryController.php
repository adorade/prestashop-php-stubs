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
    /** @var OrderPresenter|null */
    public $order_presenter;
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    }
    public function getTemplateVarOrders()
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
    public static function getUrlToInvoice($order, $context)
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
    public static function getUrlToReorder($id_order, $context)
    {
    }
    public function getBreadcrumbLinks()
    {
    }
}
