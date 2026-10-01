<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

class CartController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, $cartId)
    {
    }
    /**
     * Gets requested cart information
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getInfoAction(int $cartId)
    {
    }
    /**
     * Creates empty cart
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Changes the cart address information
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editAddressesAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editCurrencyAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editLanguageAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editCarrierAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateDeliverySettingsAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId)
    {
    }
    /**
     * Adds cart rule to cart
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addCartRuleAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Deletes cart rule from cart
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param int $cartId
     * @param int $cartRuleId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteCartRuleAction(int $cartId, int $cartRuleId)
    {
    }
    /**
     * Adds product to cart
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addProductAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Modifying a price for a product in the cart is actually performed by using generated specific prices,
     * that are used only for this cart and this product.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editProductPriceAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Changes product in cart quantity
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function editProductQuantityAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, int $productId)
    {
    }
    /**
     * Deletes product from cart
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteProductAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
