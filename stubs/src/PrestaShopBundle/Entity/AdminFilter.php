<?php

namespace PrestaShopBundle\Entity;

/**
 * AdminFilter.
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="admin_filter_search_id_idx", columns={"employee", "shop", "controller", "action", "filter_id"})})
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AdminFilterRepository")
 */
class AdminFilter
{
    public function getId(): int
    {
    }
    public function setEmployee(int $employee): static
    {
    }
    public function getEmployee(): int
    {
    }
    public function setShop(int $shop): static
    {
    }
    public function getShop(): int
    {
    }
    public function setController(string $controller): static
    {
    }
    public function getController(): string
    {
    }
    public function setAction(string $action): static
    {
    }
    public function getAction(): string
    {
    }
    public function setFilter(string $filter): static
    {
    }
    public function getFilter(): string
    {
    }
    public function getFilterId(): string
    {
    }
    public function setFilterId(string $filterId): static
    {
    }
    /**
     * Gets an array with each filter key needed by Product catalog page.
     *
     * Values are filled with empty strings.
     */
    public static function getProductCatalogEmptyFilter(): array
    {
    }
    /**
     * Gets an array with filters needed by Product catalog page.
     *
     * The data is decoded and filled with empty strings if there is no value on each entry.
     */
    public function getProductCatalogFilter(): array
    {
    }
    /**
     * Set the filters for Product catalog page into $this->filter.
     *
     * Filters input data to keep only Product catalog filters, and encode it.
     */
    public function setProductCatalogFilter(array $filter): static
    {
    }
    /**
     * Sanitize filter parameters.
     */
    public static function sanitizeFilterParameters(array $filter): mixed
    {
    }
}
