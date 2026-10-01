<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the attribute / attribute group.
 */
class AttributeController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * get All Attributes as json.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getAllAttributesAction()
    {
    }
    /**
     * Attributes generator.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function attributesGeneratorAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Product $product
     * @param array $combinations
     */
    public function ensureProductHasDefaultCombination(\Product $product, array $combinations)
    {
    }
    /**
     * Delete a product attribute.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $idProduct The product ID
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAttributeAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete all product attributes.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $idProduct The product ID
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAllAttributeAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * get the images form for a product combinations.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $idProduct The product id
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getFormImagesAction($idProduct, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
