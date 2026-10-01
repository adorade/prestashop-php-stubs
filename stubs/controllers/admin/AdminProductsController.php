<?php

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * @property Product|null $object
 */
class AdminProductsControllerCore extends \AdminController
{
    /**
     * @var int Max image size for upload
     *          As of 1.5 it is recommended to not set a limit to max image size
     */
    protected $max_file_size = \null;
    protected $max_image_size = \null;
    protected $_category;
    /**
     * @var string name of the tab to display
     */
    protected $tab_display;
    protected $tab_display_module;
    /**
     * The order in the array decides the order in the list of tab. If an element's value is a number, it will be preloaded.
     * The tabs are preloaded from the smallest to the highest number.
     *
     * @var array product tabs
     */
    protected $available_tabs = [];
    protected $default_tab = 'Informations';
    protected $available_tabs_lang = [];
    /** @var string */
    protected $position_identifier = 'id_product';
    protected $submitted_tabs;
    protected $id_current_category;
    public function __construct($theme_name = 'default')
    {
    }
    public function init()
    {
    }
    public static function getQuantities($echo, $tr)
    {
    }
    protected function _cleanMetaKeywords($keywords)
    {
    }
    /**
     * @param Product|ObjectModel $object
     * @param string $table
     */
    protected function copyFromPost(&$object, $table)
    {
    }
    public function checkMultishopBox($field, $context = \null)
    {
    }
    /**
     * @param int $id_lang
     * @param string $orderBy
     * @param string $orderWay
     * @param int $start
     * @param int $limit
     * @param int|null $id_lang_shop
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     *
     * @deprecated
     */
    public function getList($id_lang, $orderBy = \null, $orderWay = \null, $start = 0, $limit = \null, $id_lang_shop = \null)
    {
    }
    protected function loadObject($opt = \false)
    {
    }
    public function ajaxProcessGetCategoryTree()
    {
    }
    public function ajaxProcessGetCountriesOptions()
    {
    }
    public function ajaxProcessGetCurrenciesOptions()
    {
    }
    public function ajaxProcessGetGroupsOptions()
    {
    }
    public function processDeleteVirtualProduct()
    {
    }
    public function ajaxProcessAddAttachment()
    {
    }
    /**
     * Attach an existing attachment to the product.
     */
    public function processAttachments()
    {
    }
    public function processDuplicate()
    {
    }
    /**
     * @return bool|ObjectModel|void|null
     *
     * @throws PrestaShopException
     */
    public function processDelete()
    {
    }
    public function processImage()
    {
    }
    /**
     * @return bool|void
     *
     * @throws PrestaShopException
     */
    protected function processBulkDelete()
    {
    }
    public function processProductAttribute()
    {
    }
    public function processFeatures($id_product = \null)
    {
    }
    /**
     * This function is never called at the moment (specific prices cannot be edited).
     */
    public function processPricesModification()
    {
    }
    public function processPriceAddition()
    {
    }
    public function ajaxProcessDeleteSpecificPrice()
    {
    }
    public function processSpecificPricePriorities()
    {
    }
    public function processCustomizationConfiguration()
    {
    }
    public function processProductCustomization()
    {
    }
    /**
     * Overrides parent for custom redirect link.
     *
     * @return bool|ObjectModel|void|null
     *
     * @throws PrestaShopException
     */
    public function processPosition()
    {
    }
    public function initProcess()
    {
    }
    /**
     * postProcess for new form archi (need object return).
     *
     * @return ObjectModel|false
     */
    public function postCoreProcess()
    {
    }
    /**
     * postProcess handle every checks before saving products information.
     */
    public function postProcess()
    {
    }
    public function ajaxProcessDeleteProductAttribute()
    {
    }
    public function ajaxProcessDefaultProductAttribute()
    {
    }
    public function ajaxProcessEditProductAttribute()
    {
    }
    public function ajaxPreProcess()
    {
    }
    public function ajaxProcessUpdateProductImageShopAsso()
    {
    }
    public function ajaxProcessUpdateImagePosition()
    {
    }
    public function ajaxProcessUpdateCover()
    {
    }
    public function ajaxProcessDeleteProductImage($id_image = \null)
    {
    }
    protected function _validateSpecificPrice($id_shop, $id_currency, $id_country, $id_group, $id_customer, $price, $from_quantity, $reduction, $reduction_type, $from, $to, $id_combination = 0)
    {
    }
    /**
     * Checking customs feature.
     *
     * @param array $languages
     * @param array $featureInfo
     *
     * @return int|string
     */
    protected function checkFeatures($languages, $featureInfo)
    {
    }
    /**
     * Add or update a product image.
     *
     * @param Product $product Product object to add image
     * @param string $method
     *
     * @return int|false
     */
    public function addProductImage($product, $method = 'auto')
    {
    }
    /**
     * Copy a product image.
     *
     * @param int $id_product Product Id for product image filename
     * @param int $id_image Image Id for product image filename
     * @param string $method
     *
     * @return void|false
     *
     * @throws PrestaShopException
     */
    public function copyImage($id_product, $id_image, $method = 'auto')
    {
    }
    protected function updateAssoShop($id_object)
    {
    }
    public function processAdd()
    {
    }
    protected function isTabSubmitted($tab_name)
    {
    }
    public function processStatus()
    {
    }
    public function processUpdate()
    {
    }
    /**
     * Check that a saved product is valid.
     */
    public function checkProduct()
    {
    }
    /**
     * Check if a field is edited (if the checkbox is checked)
     * This method will do something only for multishop with a context all / group.
     *
     * @param string $field Name of field
     * @param int $id_lang
     *
     * @return bool
     */
    protected function isProductFieldUpdated($field, $id_lang = \null)
    {
    }
    protected function _removeTaxFromEcotax()
    {
    }
    protected function _applyTaxToEcotax($product)
    {
    }
    /**
     * Update product download.
     *
     * @param Product $product
     * @param int $edit
     *
     * @return bool
     */
    public function updateDownloadProduct($product, $edit = 0)
    {
    }
    /**
     * Update product accessories.
     *
     * @param object $product Product
     */
    public function updateAccessories($product)
    {
    }
    /**
     * Update product tags.
     *
     * @param array $languages Array languages
     * @param object $product Product
     *
     * @return bool Update result
     */
    public function updateTags($languages, $product)
    {
    }
    public function ajaxProcessProductManufacturers()
    {
    }
    public function getPreviewUrl(\Product $product)
    {
    }
    /**
     * Post treatment for suppliers.
     *
     * @param int|null $id_product
     */
    public function processSuppliers($id_product = \null)
    {
    }
    /**
     * Post treatment for warehouses.
     */
    public function processWarehouses()
    {
    }
    /**
     * Get an array of pack items for display from the product object if specified, else from POST/GET values.
     *
     * @param Product $product
     *
     * @return array of pack items
     */
    public function getPackItems($product = \null)
    {
    }
    protected function _getFinalPrice($specific_price, $product_price, $tax_rate)
    {
    }
    protected function _getCustomizationFieldIds($labels, $alreadyGenerated, $obj)
    {
    }
    protected function getCarrierList()
    {
    }
    protected function addCarriers($product = \null)
    {
    }
    /**
     * Ajax process upload images.
     *
     * @param int|null $idProduct
     * @param string $inputFileName
     * @param bool $die If method must die or return values
     *
     * @return array
     */
    public function ajaxProcessaddProductImage($idProduct = \null, $inputFileName = 'file', $die = \true)
    {
    }
    public function ajaxProcessProductQuantity()
    {
    }
    public function getCombinationImagesJS()
    {
    }
    public function haveThisAccessory($accessory_id, $accessories)
    {
    }
    protected function initPack(\Product $product)
    {
    }
    /**
     * delete all items in pack, then check if type_product value is 2.
     * if yes, add the pack items from input "inputPackItems".
     *
     * @param Product $product
     */
    public function updatePackItems($product)
    {
    }
    public function ajaxProcessCheckProductName()
    {
    }
    public function ajaxProcessUpdatePositions()
    {
    }
    public function ajaxProcessPublishProduct()
    {
    }
    public function processImageLegends()
    {
    }
    /**
     * Returns in an homemade JSON with the content of a products pack.
     */
    public function displayAjaxProductPackItems()
    {
    }
    /**
     * Displays a list of products when their name matches a given query
     * Optional parameters allow products to be excluded from the results.
     */
    public function displayAjaxProductsList()
    {
    }
}
