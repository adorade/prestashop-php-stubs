<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for warehouse on the /product/form page.
 */
class WarehouseController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Refresh the WarehouseCombination data for the given product ID.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $idProduct
     *
     * @return string|Response
     */
    public function refreshProductWarehouseCombinationFormAction($idProduct)
    {
    }
}
