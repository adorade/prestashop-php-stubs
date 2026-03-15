<?php

namespace PrestaShop\PrestaShop\Adapter\Admin;

/**
 * Base class for data provider, to give common Adapter functions.
 *
 * Contains methods to compile SQL from parseable arrays of select, tables, joins, where, etc...
 */
abstract class AbstractAdminQueryBuilder
{
    public const FILTERING_LIKE_BOTH = 'LIKE \'%%%s%%\'';
    public const FILTERING_LIKE_LEFT = 'LIKE \'%%%s\'';
    public const FILTERING_LIKE_RIGHT = 'LIKE \'%s%%\'';
    public const FILTERING_EQUAL_NUMERIC = '= %s';
    public const FILTERING_EQUAL_STRING = '= \'%s\'';
    /**
     * Compiles a SQL query (SELECT), from a group of associative arrays.
     *
     * @see \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider::getCatalogProductList() for an example.
     *
     * Format example for $table:
     *   $table = array(
     *      'p' => 'product',                 // First table: a simple name
     *      'pl' => array(                    // Next: arrays to set join properly
     *          'table' => 'product_lang',
     *          'join' => 'LEFT JOIN',
     *          'on' => 'pl.`id_product` = p.`id_product` AND pl.`id_lang` = '.$idLang.' AND pl.`id_shop` = '.$idShop
     *      ),
     *      'sav' => array(
     *          'table' => 'stock_available',
     *          'join' => 'LEFT JOIN',
     *          'on' => 'sav.`id_product` = p.`id_product` AND sav.`id_product_attribute` = 0 AND sav.id_shop_group = 1 AND sav.id_shop = 0'
     *      ),
     *      ...
     *   );
     *
     * Format example for $select:
     *   $select = array(
     *      'id_product' => array('table' => 'p', 'field' => 'id_product', 'filtering' => self::FILTERING_EQUAL_NUMERIC),
     *      'reference' => array('table' => 'p', 'field' => 'reference', 'filtering' => self::FILTERING_LIKE_BOTH),
     *      ...
     *   );
     *
     * Format example for $where:
     *   $where = array(
     *       'AND',                      // optional if AND, mandatory if OR.
     *       1,                          // First condition: let 1 here if there is no condition, then "WHERE 1;" will work better than "WHERE ;"
     *       array('OR', '2', '3'),
     *       array(
     *           'AND',
     *           array('OR', '4', '5'),
     *           array('6', '7')
     *       )
     *   );
     * In the WHERE, it's up to you to build each condition string. You can use the 'filtering' data in the $select array to help you:
     * $where[] = $select[$field]['table'].'.`'.$select[$field]['field'].'` '.sprintf($select[$field]['filtering'], $filterValue);
     *
     * Format example for $order:
     * $order = array('name ASC', 'id_product DESC');
     *
     * @param array<string,array<string,string>|string> $select
     * @param array<mixed> $table
     * @param array<mixed> $where
     * @param array<string> $groupBy
     * @param array<string> $order
     * @param string $limit
     *
     * @throws LogicException if SQL elements cannot be joined
     *
     * @return string the SQL query ready to be executed
     */
    protected function compileSqlQuery(array $select, array $table, array $where = [], array $groupBy = [], array $order = [], $limit = null)
    {
    }
    /**
     * Returns the last SQL query that was compiled on this Provider.
     *
     * @return string The last SQL query that was compiled with $this->compileSqlQuery()
     */
    public function getLastCompiledSql()
    {
    }
}
