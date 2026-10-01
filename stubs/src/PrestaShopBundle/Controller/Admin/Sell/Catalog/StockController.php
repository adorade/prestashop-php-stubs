<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Admin controller for the Stock pages.
 */
class StockController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function overviewAction()
    {
    }
}
