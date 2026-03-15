<?php

namespace PrestaShop\PrestaShop\Adapter\Shop;

/**
 * This class will provide legacy shop context.
 */
class Context implements \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface, \PrestaShop\PrestaShop\Core\Shop\ShopContextInterface, \PrestaShop\PrestaShop\Core\Shop\ShopConstraintContextInterface
{
    /**
     * Get shops list.
     *
     * @param bool $active
     * @param bool $get_as_list_id
     *
     * @return array
     */
    public function getShops($active = true, $get_as_list_id = false)
    {
    }
    /**
     * Get current ID of shop if context is CONTEXT_SHOP.
     *
     * @return int
     */
    public function getContextShopID($null_value_without_multishop = false)
    {
    }
    /**
     * Get a list of ID concerned by the shop context (E.g. if context is shop group, get list of children shop ID).
     *
     * @param bool|string $share If false, dont check share datas from group. Else can take a Shop::SHARE_* constant value
     *
     * @return array
     */
    public function getContextListShopID($share = false)
    {
    }
    /**
     * Return the result of getContextListShopID() for customers usecase
     * This handles the "multishop sharing customer" feature setting
     *
     * @return array
     */
    public function getContextListShopIDUsingCustomerSharingSettings()
    {
    }
    /**
     * Get if it's a GroupShop context.
     *
     * @return bool
     *
     * @deprecated since 1.7.6.0, to be removed in 1.8. Use $this->isGroupShopContext() instead.
     */
    public function isShopGroupContext()
    {
    }
    /**
     * Get if it's a Shop context.
     *
     * @return bool
     */
    public function isShopContext()
    {
    }
    /**
     * Get if it's a All context.
     *
     * @return bool
     *
     * @deprecated since 1.7.6.0, to be removed in 1.8. Use $this->isAllShopContext() instead.
     */
    public function isAllContext()
    {
    }
    /**
     * Check if shop context is Shop.
     *
     * @return bool
     */
    public function isSingleShopContext()
    {
    }
    /**
     * Update Multishop context for only one shop.
     *
     * @param int $id Shop id to set in the current context
     */
    public function setShopContext($id)
    {
    }
    /**
     * Update Multishop context for only one shop group.
     *
     * @param int $id Shop id to set in the current context
     */
    public function setShopGroupContext($id)
    {
    }
    /**
     * Update Multishop context for only one shop group.
     *
     * @param int $id Shop id to set in the current context
     */
    public function setAllContext($id)
    {
    }
    public function getContextShopGroup()
    {
    }
    /**
     * Retrieve group ID of a shop.
     *
     * @param int $shopId
     * @param bool $asId
     *
     * @return int
     */
    public function getGroupFromShop($shopId, $asId = true)
    {
    }
    /**
     * @param int $shopGroupId
     *
     * @return ShopGroup
     */
    public function ShopGroup($shopGroupId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isAllShopContext()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isGroupShopContext()
    {
    }
    /**
     * Get list of all shop IDs.
     *
     * @return array
     */
    public function getAllShopIds()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getShopName()
    {
    }
    /**
     * @param bool $strict
     *
     * @return ShopConstraint
     */
    public function getShopConstraint(bool $strict = false): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
