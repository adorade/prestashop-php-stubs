<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for suppliers page.
 */
class SupplierController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * refreshProductSupplierCombinationFormAction.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $idProduct
     * @param int|string $supplierIds The suppliers ids separate by "-"
     *
     * @return string|Response
     */
    public function refreshProductSupplierCombinationFormAction($idProduct, $supplierIds)
    {
    }
}
