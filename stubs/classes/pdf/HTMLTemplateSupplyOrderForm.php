<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * @since 1.5
 */
class HTMLTemplateSupplyOrderFormCore extends \HTMLTemplate
{
    /**
     * @var SupplyOrder
     */
    public $supply_order;
    /**
     * @var Warehouse
     */
    public $warehouse;
    /**
     * @var Address
     */
    public $address_warehouse;
    /**
     * @var Address
     */
    public $address_supplier;
    /**
     * @var Context
     */
    public $context;
    /**
     * @param SupplyOrder $supply_order
     * @param Smarty $smarty
     *
     * @throws PrestaShopException
     */
    public function __construct(\SupplyOrder $supply_order, \Smarty $smarty)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
    }
    /**
     * Returns the invoice logo.
     *
     * @return string Logo path
     */
    protected function getLogo()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBulkFilename()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilename()
    {
    }
    /**
     * Get order taxes summary.
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    protected function getTaxOrderSummary()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getHeader()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFooter()
    {
    }
    /**
     * Rounds values of a SupplyOrderDetail object.
     *
     * @param array|PrestaShopCollection $collection
     */
    protected function roundSupplyOrderDetails(&$collection)
    {
    }
    /**
     * Rounds values of a SupplyOrder object.
     *
     * @param SupplyOrder $supply_order
     */
    protected function roundSupplyOrder(\SupplyOrder &$supply_order)
    {
    }
}
