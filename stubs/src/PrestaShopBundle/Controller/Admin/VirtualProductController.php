<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the virtual product on the /product/form page.
 */
class VirtualProductController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Process Ajax Form to create/update virtual product.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param string|int $idProduct
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function saveAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Download the content of the virtual product.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $idProduct
     *
     * @return BinaryFileResponse
     */
    public function downloadFileAction($idProduct)
    {
    }
    /**
     * Process Ajax Form to remove attached file.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param string|int $idProduct
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function removeFileAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process Ajax remove action.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param string|int $idProduct
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function removeAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
