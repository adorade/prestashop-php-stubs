<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

class CartController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    use \PrestaShopBundle\Controller\BulkActionsTrait;
    /**
     * Shows list of carts
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CartFilter $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CartFilter $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.carts')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory $cartsKpiFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.cart')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactory $cartGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Delete given cart
     *
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteCartAction(int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes carts on bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function bulkDeleteCartAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Export carts in CSV
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CartFilter $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportCartAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CartFilter $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.cart')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactory $cartGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function viewAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $cartId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.cart')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory $kpiRowFactory,
        \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration
    )
    {
    }
    /**
     * Gets requested cart information
     *
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function getInfoAction(int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration)
    {
    }
    /**
     * Creates empty cart
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function createAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Changes the cart address information
     *
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editAddressesAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editCurrencyAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $cartId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editLanguageAction(int $cartId, \Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editCarrierAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function updateDeliverySettingsAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Adds cart rule to cart
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function addCartRuleAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Deletes cart rule from cart
     *
     * @param int $cartId
     * @param int $cartRuleId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function deleteCartRuleAction(int $cartId, int $cartRuleId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Adds product to cart
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function addProductAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Modifying a price for a product in the cart is actually performed by using generated specific prices,
     * that are used only for this cart and this product.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editProductPriceAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, int $productId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Changes product in cart quantity
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function editProductQuantityAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, int $productId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration)
    {
    }
    /**
     * Deletes product from cart
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cartId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function deleteProductAction(\Symfony\Component\HttpFoundation\Request $request, int $cartId, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
