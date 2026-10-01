<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class ImageController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Retrieves images for all shops, but the cover (which is multi-shop compatable) is retrieved based on $shopId
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="You do not have permission to update this.")
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getImagesForShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to red or update this.")
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function productShopImagesAction(int $productId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to update this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addImageAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to update this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productImageId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateImageAction(\Symfony\Component\HttpFoundation\Request $request, int $productImageId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to update this.")
     *
     * @param int $productImageId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteImageAction(int $productImageId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
