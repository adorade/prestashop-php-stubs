<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @deprecated since 9.0 and will be removed in 10.0, stock is now managed by new logic
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
