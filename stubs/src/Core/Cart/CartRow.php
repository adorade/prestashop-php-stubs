<?php

namespace PrestaShop\PrestaShop\Core\Cart;

/**
 * represent a cart row, ie a product and a quantity, and some post-process data like cart rule applied.
 */
class CartRow
{
    /**
     * row round mode by item.
     */
    public const ROUND_MODE_ITEM = 'item';
    /**
     * row round mode by line.
     */
    public const ROUND_MODE_LINE = 'line';
    /**
     * row round mode by all lines.
     */
    public const ROUND_MODE_TOTAL = 'total';
    /**
     * static cache key pattern.
     */
    public const PRODUCT_PRICE_CACHE_ID_PATTERN = 'Product::getPriceStatic_%d-%d';
    /**
     * @var PriceCalculator adapter to calculate price
     */
    protected $priceCalculator;
    /**
     * @var AddressFactory adapter to get address informations
     */
    protected $addressFactory;
    /**
     * @var CustomerDataProvider adapter to get customer informations
     */
    protected $customerDataProvider;
    /**
     * @var GroupDataProvider adapter to get group informations
     */
    protected $groupDataProvider;
    /**
     * @var Database adapter to get database
     */
    protected $databaseAdapter;
    /**
     * @var CacheAdapter adapter to get cache
     */
    protected $cacheAdapter;
    /**
     * @var bool calculation will use ecotax
     */
    protected $useEcotax;
    /**
     * @var int calculation precision (decimals count)
     */
    protected $precision;
    /**
     * @var string round mode : see self::ROUND_MODE_xxx
     */
    protected $roundType;
    /**
     * @var int|null
     */
    protected $orderId;
    /**
     * @var array previous data for product: array given by Cart::getProducts()
     */
    protected $rowData = [];
    /**
     * @var AmountImmutable
     */
    protected $initialUnitPrice;
    /**
     * @var AmountImmutable
     */
    protected $initialTotalPrice;
    /**
     * @var AmountImmutable
     */
    protected $finalUnitPrice;
    /**
     * @var AmountImmutable
     */
    protected $finalTotalPrice;
    /**
     * @var bool indicates if the calculation was triggered (reset on data changes)
     */
    protected $isProcessed = false;
    /**
     * @param array $rowData array item given by Cart::getProducts()
     * @param PriceCalculator $priceCalculator
     * @param AddressFactory $addressFactory
     * @param CustomerDataProvider $customerDataProvider
     * @param CacheAdapter $cacheAdapter
     * @param GroupDataProvider $groupDataProvider
     * @param Database $databaseAdapter
     * @param bool $useEcotax
     * @param int $precision
     * @param string $roundType see self::ROUND_MODE_*
     * @param int|null $orderId If order ID is specified the product price is fetched from associated OrderDetail value
     */
    public function __construct($rowData, \PrestaShop\PrestaShop\Adapter\Product\PriceCalculator $priceCalculator, \PrestaShop\PrestaShop\Adapter\AddressFactory $addressFactory, \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider, \PrestaShop\PrestaShop\Adapter\Cache\CacheAdapter $cacheAdapter, \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataProvider, \PrestaShop\PrestaShop\Adapter\Database $databaseAdapter, $useEcotax, $precision, $roundType, $orderId = null)
    {
    }
    /**
     * @param array $rowData
     *
     * @return CartRow
     */
    public function setRowData($rowData)
    {
    }
    /**
     * @return array
     */
    public function getRowData()
    {
    }
    /**
     * Returns the initial unit price (ie without applying cart rules).
     *
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getInitialUnitPrice()
    {
    }
    /**
     * Returns the initial total price (ie without applying cart rules).
     *
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getInitialTotalPrice()
    {
    }
    /**
     * return final price: initial minus the cart rule discounts.
     *
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getFinalUnitPrice()
    {
    }
    /**
     * return final price: initial minus the cart rule discounts.
     *
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getFinalTotalPrice()
    {
    }
    /**
     * run initial row calculation.
     *
     * @param CartCore $cart
     *
     * @throws CoreException
     */
    public function processCalculation(\CartCore $cart)
    {
    }
    protected function getProductPrice(\CartCore $cart, $rowData)
    {
    }
    /**
     * depending on attribute roundType, rounds the item/line value.
     */
    protected function applyRound()
    {
    }
    /**
     * substract discount from the row
     * if discount exceeds amount, we keep 0 (no use of negative amounts).
     *
     * @param AmountImmutable $amount
     */
    public function applyFlatDiscount(\PrestaShop\PrestaShop\Core\Cart\AmountImmutable $amount)
    {
    }
    /**
     * @param float $percent 0-100
     *
     * @return AmountImmutable
     */
    public function applyPercentageDiscount($percent)
    {
    }
    /**
     * when final row price is calculated, we need to update unit price.
     */
    protected function updateFinalUnitPrice()
    {
    }
    /**
     * @return string
     */
    public function getRoundType()
    {
    }
}
