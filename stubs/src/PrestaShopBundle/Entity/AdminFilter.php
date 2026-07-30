<?php

namespace PrestaShopBundle\Entity;

/**
 * AdminFilter.
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="admin_filter_search_id_idx", columns={"employee", "shop", "controller", "action", "filter_id"})})
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AdminFilterRepository")
 */
class AdminFilter
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Set employee.
     *
     * @param int $employee
     *
     * @return AdminFilter
     */
    public function setEmployee($employee)
    {
    }
    /**
     * Get employee.
     *
     * @return int
     */
    public function getEmployee()
    {
    }
    /**
     * Set shop.
     *
     * @param int $shop
     *
     * @return AdminFilter
     */
    public function setShop($shop)
    {
    }
    /**
     * Get shop.
     *
     * @return int
     */
    public function getShop()
    {
    }
    /**
     * Set controller.
     *
     * @param string $controller
     *
     * @return AdminFilter
     */
    public function setController($controller)
    {
    }
    /**
     * Get controller.
     *
     * @return string
     */
    public function getController()
    {
    }
    /**
     * Set action.
     *
     * @param string $action
     *
     * @return AdminFilter
     */
    public function setAction($action)
    {
    }
    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * Set filter.
     *
     * @param string $filter
     *
     * @return AdminFilter
     */
    public function setFilter($filter)
    {
    }
    /**
     * Get filter.
     *
     * @return string
     */
    public function getFilter()
    {
    }
    /**
     * @return string
     */
    public function getFilterId()
    {
    }
    /**
     * @param string $filterId
     *
     * @return AdminFilter
     */
    public function setFilterId($filterId)
    {
    }
    /**
     * Gets an array with each filter key needed by Product catalog page.
     *
     * Values are filled with empty strings.
     *
     * @return array
     */
    public static function getProductCatalogEmptyFilter()
    {
    }
    /**
     * Gets an array with filters needed by Product catalog page.
     *
     * The data is decoded and filled with empty strings if there is no value on each entry
     * .
     *
     * @return array
     */
    public function getProductCatalogFilter()
    {
    }
    /**
     * Set the filters for Product catalog page into $this->filter.
     *
     * Filters input data to keep only Product catalog filters, and encode it.
     *
     * @param array $filter
     *
     * @return AdminFilter tis object for fluent chaining
     */
    public function setProductCatalogFilter($filter)
    {
    }
    /**
     * Sanitize filter parameters.
     *
     * @param array $filter
     *
     * @return mixed
     */
    public static function sanitizeFilterParameters(array $filter)
    {
    }
}
