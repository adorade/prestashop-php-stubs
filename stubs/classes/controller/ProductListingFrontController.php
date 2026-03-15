<?php

/**
 * This class is the base class for all front-end "product listing" controllers,
 * like "CategoryController", that is, controllers whose primary job is
 * to display a list of products and filters to make navigation easier.
 */
abstract class ProductListingFrontControllerCore extends \ProductPresentingFrontController
{
    /**
     * Generates an URL to a product listing controller
     * with only the essential query params and page remaining.
     *
     * @param string $canonicalUrl an url to a listing controller page
     *
     * @return string a canonical URL for the current page in the list
     */
    public function buildPaginatedUrl(string $canonicalUrl): string
    {
    }
    /**
     * Runs "prepareProductForTemplate" on the collection
     * of product ids passed in.
     *
     * @param array $products array of arrays containing at list the "id_product" key
     *
     * @return array of products ready for templating
     */
    protected function prepareMultipleProductsForTemplate(array $products)
    {
    }
    /**
     * The ProductSearchContext is passed to search providers
     * so that they can avoid using the global id_lang and such
     * variables. This method acts as a factory for the ProductSearchContext.
     *
     * @return ProductSearchContext a search context for the queries made by this controller
     */
    protected function getProductSearchContext()
    {
    }
    /**
     * Converts a Facet to an array with all necessary
     * information for templating.
     *
     * @param Facet $facet
     *
     * @return array ready for templating
     */
    protected function prepareFacetForTemplate(\PrestaShop\PrestaShop\Core\Product\Search\Facet $facet)
    {
    }
    /**
     * Renders an array of facets.
     *
     * @param ProductSearchResult $result
     *
     * @return string the HTML of the facets
     */
    protected function renderFacets(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result)
    {
    }
    /**
     * Renders an array of active filters.
     *
     * @param ProductSearchResult $result
     *
     * @return string the HTML of the facets
     */
    protected function renderActiveFilters(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result)
    {
    }
    /**
     * This returns all template variables needed for rendering
     * the product list, the facets, the pagination and the sort orders.
     *
     * @return array variables ready for templating
     */
    protected function getProductSearchVariables()
    {
    }
    /**
     * Removes price information from result (in facet collection and available sorters)
     * Usually used for catalog mode.
     *
     * @param ProductSearchResult $result
     */
    protected function disablePriceControls(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result)
    {
    }
    /**
     * Pagination is HARD. We let the core do the heavy lifting from
     * a simple representation of the pagination.
     *
     * Generated URLs will include the page number, obviously,
     * but also the sort order and the "q" (facets) parameters.
     *
     * @param ProductSearchQuery $query
     * @param ProductSearchResult $result
     *
     * @return array An array that makes rendering the pagination very easy
     */
    protected function getTemplateVarPagination(\PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery $query, \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult $result)
    {
    }
    /**
     * Prepares the sort-order links.
     *
     * Sort order links contain the current encoded facets if any,
     * but not the page number because normally when you change the sort order
     * you want to go back to page one.
     *
     * @param array $sortOrders the available sort orders
     * @param string $currentSortOrderURLParameter used to know which of the sort orders (if any) is active
     *
     * @return array
     */
    protected function getTemplateVarSortOrders(array $sortOrders, $currentSortOrderURLParameter)
    {
    }
    /**
     * Similar to "getProductSearchVariables" but used in AJAX queries.
     *
     * It returns an array with the HTML for the products and facets,
     * and the current URL to put it in the browser URL bar (we don't want to
     * break the back button!).
     *
     * @return array
     */
    protected function getAjaxProductSearchVariables()
    {
    }
    /**
     * Cleans the products array with only whitelisted properties.
     *
     * @param array[] $products
     *
     * @return array[] Filtered product list
     */
    protected function prepareProductArrayForAjaxReturn(array $products)
    {
    }
    /**
     * Finally, the methods that wraps it all:.
     *
     * If we're doing AJAX, output a JSON of the necessary product search related
     * variables.
     *
     * If we're not doing AJAX, then render the whole page with the given template.
     *
     * @param string $template the template for this page
     */
    protected function doProductSearch($template, $params = [], $locale = \null)
    {
    }
    abstract public function getListingLabel();
    /**
     * Gets the product search query for the controller.
     * That is, the minimum contract with which search modules
     * must comply.
     *
     * @return ProductSearchQuery
     */
    abstract protected function getProductSearchQuery();
    /**
     * We cannot assume that modules will handle the query,
     * so we need a default implementation for the search provider.
     *
     * @return ProductSearchProviderInterface
     */
    abstract protected function getDefaultProductSearchProvider();
}
