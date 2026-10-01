<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

class ProductSearchContext
{
    public function __construct(\Context $context = null)
    {
    }
    /**
     * @param int $idShop
     *
     * @return self
     */
    public function setIdShop($idShop)
    {
    }
    /**
     * @return int the Product Search Shop id
     */
    public function getIdShop()
    {
    }
    /**
     * @param int $idLang
     *
     * @return self
     */
    public function setIdLang($idLang)
    {
    }
    /**
     * @return int the Product Search Language id
     */
    public function getIdLang()
    {
    }
    /**
     * @param int $idCurrency
     *
     * @return self
     */
    public function setIdCurrency($idCurrency)
    {
    }
    /**
     * @return int the Product Search Currency id
     */
    public function getIdCurrency()
    {
    }
    /**
     * @param int $idCustomer
     *
     * @return self
     */
    public function setIdCustomer($idCustomer)
    {
    }
    /**
     * @return int the Product Search Customer id
     */
    public function getIdCustomer()
    {
    }
    /**
     * @return int the Shop Group Iid
     */
    public function getIdShopGroup(): int
    {
    }
    /**
     * @param int $idShopGroup
     *
     * @return self
     */
    public function setIdShopGroup(int $idShopGroup): self
    {
    }
    /**
     * @return bool if sharing stock is enable
     */
    public function isStockSharingBetweenShopGroupEnabled(): bool
    {
    }
    /**
     * @param bool $stockSharingBetweenShopGroupEnabled
     *
     * @return self
     */
    public function setStockSharingBetweenShopGroupEnabled(bool $stockSharingBetweenShopGroupEnabled): self
    {
    }
}
