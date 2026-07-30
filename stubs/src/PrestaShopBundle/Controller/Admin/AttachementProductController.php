<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for product attachments (in /product/form page).
 */
class AttachementProductController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Manage form add product attachment.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $idProduct
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function addAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
