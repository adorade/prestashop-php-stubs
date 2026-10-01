<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the attribute / attribute group.
 */
class SpecificPriceController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Get specific price list for a product.
     *
     * @AdminSecurity("is_granted('read', 'ADMINPRODUCTS_')")
     *
     * @param string|int $idProduct The product ID
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listAction($idProduct)
    {
    }
    /**
     * Add specific price Form process.
     *
     * @AdminSecurity(
     *     "is_granted('create', 'ADMINPRODUCTS_') && is_granted('update', 'ADMINPRODUCTS_')"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get one specific price list for a product.
     *
     * @Template("@PrestaShop/Admin/Product/ProductPage/Forms/form_specific_price.html.twig")
     *
     * @AdminSecurity(
     *     "is_granted('create', 'ADMINPRODUCTS_') && is_granted('update', 'ADMINPRODUCTS_')"
     * )
     *
     * @param int $idSpecificPrice
     *
     * @return \Symfony\Component\HttpFoundation\Response|array
     */
    public function getUpdateFormAction($idSpecificPrice)
    {
    }
    /**
     * Update specific price Form process.
     *
     * @AdminSecurity(
     *     "is_granted('create', 'ADMINPRODUCTS_') && is_granted('update', 'ADMINPRODUCTS_')"
     * )
     *
     * @param int $idSpecificPrice
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateAction($idSpecificPrice, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete a specific price.
     *
     * @AdminSecurity("is_granted('delete', 'ADMINPRODUCTS_')")
     *
     * @param int $idSpecificPrice The specific price ID
     * @param \Symfony\Component\HttpFoundation\Request $request The request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAction($idSpecificPrice, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
