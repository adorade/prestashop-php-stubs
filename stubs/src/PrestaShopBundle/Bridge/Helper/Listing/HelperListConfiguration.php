<?php

namespace PrestaShopBundle\Bridge\Helper\Listing;

/**
 * This object contains the configuration needed to generate a list using the legacy HelperList class.
 */
class HelperListConfiguration
{
    /**
     * Sql SELECT clause
     *
     * @see AdminController::$_select
     *
     * @var string
     */
    public $select = '';
    /**
     * Sql WHERE clause
     *
     * @see AdminController::$_where
     *
     * @var string
     */
    public $where = '';
    /**
     * Sql JOIN clause
     *
     * @see AdminController::$_join
     *
     * @var string
     */
    public $join = '';
    /**
     * Sql GROUP clause
     *
     * @see AdminController::$_group
     *
     * @var string
     */
    public $group = '';
    /**
     * Sql ORDER BY clause
     *
     * @see AdminController::$_orderBy
     *
     * @var string
     */
    public $orderBy = '';
    /**
     * Sql value for ORDER BY clause argument e.g. ASC|DESC
     *
     * @see AdminController::$_orderWay
     *
     * @var string
     */
    public $orderWay = '';
    /**
     * Sql HAVING clause
     *
     * @see AdminController::$_having
     *
     * @var string
     */
    public $having = '';
    /**
     * Sql HAVING clause for filters
     *
     * @see AdminController::$_filterHaving
     *
     * @var string
     */
    public $filterHaving;
    /**
     * Contains various sql clauses for filtering the list
     *
     * @see AdminController::$filter
     *
     * @var string
     */
    public $filter = '';
    /**
     * The definition of list fields
     *
     * @see HelperList::$fields_list
     *
     * @var array<string, array<string, mixed>>
     *
     * @see self::setFieldsList() for defined array structure
     */
    public $fieldsList = [];
    /**
     * List record rows
     *
     * @see HelperList::$_list
     *
     * @var array<int, array<string, mixed>>|null
     */
    public $list;
    /**
     * Total count of records found. Used for pagination.
     *
     * @see HelperList::$listTotal
     *
     * @var int
     */
    public $listTotal;
    /**
     * @param int $tabId
     * @param string $tableName
     * @param string $listId
     * @param string $objectModelClassName
     * @param string $identifierKey
     * @param string|null $positionIdentifierKey
     * @param bool $isJoinLanguageTableAuto
     * @param bool $deleted
     * @param string $defaultOrderBy
     * @param bool $explicitSelect
     * @param bool $useFoundRows
     * @param string $legacyControllerName
     * @param string $token
     * @param bool $bootstrap
     * @param string $legacyCurrentIndex
     * @param int $multiShopContext
     * @param string $indexUrl
     */
    public function __construct(int $tabId, string $tableName, string $listId, string $objectModelClassName, string $identifierKey, ?string $positionIdentifierKey, bool $isJoinLanguageTableAuto, bool $deleted, string $defaultOrderBy, bool $explicitSelect, bool $useFoundRows, string $legacyControllerName, string $token, bool $bootstrap, string $legacyCurrentIndex, int $multiShopContext, string $indexUrl)
    {
    }
    /**
     * @return int
     */
    public function getTabId(): int
    {
    }
    /**
     * @return string
     */
    public function getTableName(): string
    {
    }
    /**
     * @return string
     */
    public function getListId(): string
    {
    }
    /**
     * @return string
     */
    public function getObjectModelClassName(): string
    {
    }
    /**
     * @return string
     */
    public function getLegacyControllerName(): string
    {
    }
    /**
     * @return string
     */
    public function getIdentifierKey(): string
    {
    }
    /**
     * @return string
     */
    public function getToken(): string
    {
    }
    /**
     * @return string
     */
    public function getDefaultOrderBy(): string
    {
    }
    /**
     * @return bool
     */
    public function autoJoinLanguageTable(): bool
    {
    }
    /**
     * @return int
     */
    public function getMultiShopContext(): int
    {
    }
    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
    }
    /**
     * @return bool
     */
    public function isExplicitSelect(): bool
    {
    }
    /**
     * @return bool
     */
    public function useFoundRows(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getPositionIdentifierKey(): ?string
    {
    }
    /**
     * @return bool
     */
    public function isBootstrap(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getLegacyCurrentIndex(): ?string
    {
    }
    /**
     * @return string
     */
    public function getDefaultOrderWay(): string
    {
    }
    /**
     * @param string $defaultOrderWay
     *
     * @return HelperListConfiguration
     */
    public function setDefaultOrderWay(string $defaultOrderWay): self
    {
    }
    /**
     * list of vars for delete button
     *
     * @return array<string, mixed>
     */
    public function getDeleteLinkVars(): array
    {
    }
    /**
     * @param array<string, mixed> $deleteLinkVars
     *
     * @return HelperListConfiguration
     */
    public function setDeleteLinkVars(array $deleteLinkVars): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
    /**
     * @return string
     */
    public function getShopLinkType(): string
    {
    }
    /**
     * @param string $shopLinkType
     *
     * @return HelperListConfiguration
     */
    public function setShopLinkType(string $shopLinkType): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
    /**
     * @return int[]
     */
    public function getPaginationLimits(): array
    {
    }
    /**
     * @param int[] $paginationLimits
     *
     * @return HelperListConfiguration
     */
    public function setPaginationLimits(array $paginationLimits): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
    /**
     * @return int
     */
    public function getDefaultPaginationLimit(): int
    {
    }
    /**
     * @param int $defaultPaginationLimit
     *
     * @return HelperListConfiguration
     */
    public function setDefaultPaginationLimit(int $defaultPaginationLimit): \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration
    {
    }
    /**
     * @param string $label
     * @param array{href?:string, desc?:string, class?:string} $config
     *
     * @return $this
     */
    public function addToolbarAction(string $label, array $config): self
    {
    }
    /**
     * @return array<string, array<string, mixed>>
     */
    public function getToolbarActions(): array
    {
    }
    /**
     * @param string $action
     *
     * @return $this
     */
    public function addRowAction(string $action): self
    {
    }
    /**
     * @return string[]
     */
    public function getRowActions(): array
    {
    }
    /**
     * @param string $label
     * @param array{text: string, icon?: string, confirm?: string} $config
     *
     * @return $this
     */
    public function addBulkAction(string $label, array $config): self
    {
    }
    /**
     * @return array<string, array<string, mixed>>
     */
    public function getBulkActions(): array
    {
    }
    /**
     * @param array<string, array<string, mixed>> $fieldsList
     *
     * @return $this
     */
    public function setFieldsList(array $fieldsList): self
    {
    }
    /**
     * @return string|null
     */
    public function getIndexUrl(): ?string
    {
    }
    /**
     * @return bool
     */
    public function isShopShareData(): bool
    {
    }
    /**
     * @param bool $shopShareData
     *
     * @return HelperListConfiguration
     */
    public function setShopShareData(bool $shopShareData): self
    {
    }
}
