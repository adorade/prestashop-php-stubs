<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for product images.
 */
class ProductImageController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Manage upload for product image.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $idProduct
     * @param Request $request
     *
     * @return string
     */
    public function uploadImageAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Update images positions.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function updateImagePositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Manage form image.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     * @Template("@PrestaShop/Admin/ProductImage/form.html.twig")
     *
     * @param string|int $idImage
     * @param Request $request
     *
     * @return array|JsonResponse|Response
     */
    public function formAction($idImage, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete an image from its ID.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $idImage
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function deleteAction($idImage, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
