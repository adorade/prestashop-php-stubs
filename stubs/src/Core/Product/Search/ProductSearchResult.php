<?php

namespace PrestaShop\PrestaShop\Core\Product\Search;

class ProductSearchResult
{
    /**
     * @param array $products
     *
     * @return $this
     */
    public function setProducts(array $products)
    {
    }
    /**
     * @return array
     */
    public function getProducts()
    {
    }
    /**
     * @param int $totalProductsCount
     *
     * @return $this
     */
    public function setTotalProductsCount($totalProductsCount)
    {
    }
    /**
     * @return int
     */
    public function getTotalProductsCount()
    {
    }
    /**
     * @param FacetCollection $facetCollection
     *
     * @return $this
     */
    public function setFacetCollection(\PrestaShop\PrestaShop\Core\Product\Search\FacetCollection $facetCollection)
    {
    }
    /**
     * @return FacetCollection|null
     */
    public function getFacetCollection()
    {
    }
    /**
     * @param string $encodedFacets
     *
     * @return $this
     */
    public function setEncodedFacets($encodedFacets)
    {
    }
    /**
     * @return string
     */
    public function getEncodedFacets()
    {
    }
    /**
     * @param SortOrder $sortOrder
     *
     * @return $this
     */
    public function addAvailableSortOrder(\PrestaShop\PrestaShop\Core\Product\Search\SortOrder $sortOrder)
    {
    }
    /**
     * @return array
     */
    public function getAvailableSortOrders()
    {
    }
    /**
     * @param array $sortOrders
     *
     * @return $this
     */
    public function setAvailableSortOrders(array $sortOrders)
    {
    }
    /**
     * @param SortOrder $currentSortOrder
     *
     * @return $this
     */
    public function setCurrentSortOrder(\PrestaShop\PrestaShop\Core\Product\Search\SortOrder $currentSortOrder)
    {
    }
    /**
     * @return mixed
     */
    public function getCurrentSortOrder()
    {
    }
}
