<?php

class AdminImportControllerCore extends \AdminController
{
    public static $column_mask;
    public $entities = [];
    public $available_fields = [];
    /** @var array|string[] */
    public $required_fields = [];
    public static $default_values = [];
    public static $validators = [
        'active' => ['AdminImportController', 'getBoolean'],
        'tax_rate' => ['AdminImportController', 'getPrice'],
        /* Tax excluded */
        'price_tex' => ['AdminImportController', 'getPrice'],
        /* Tax included */
        'price_tin' => ['AdminImportController', 'getPrice'],
        'reduction_price' => ['AdminImportController', 'getPrice'],
        'reduction_percent' => ['AdminImportController', 'getPrice'],
        'wholesale_price' => ['AdminImportController', 'getPrice'],
        'ecotax' => ['AdminImportController', 'getPrice'],
        'name' => ['AdminImportController', 'createMultiLangField'],
        'description' => ['AdminImportController', 'createMultiLangField'],
        'description_short' => ['AdminImportController', 'createMultiLangField'],
        'meta_title' => ['AdminImportController', 'createMultiLangField'],
        'meta_keywords' => ['AdminImportController', 'createMultiLangField'],
        'meta_description' => ['AdminImportController', 'createMultiLangField'],
        'link_rewrite' => ['AdminImportController', 'createMultiLangField'],
        'available_now' => ['AdminImportController', 'createMultiLangField'],
        'available_later' => ['AdminImportController', 'createMultiLangField'],
        'category' => ['AdminImportController', 'split'],
        'online_only' => ['AdminImportController', 'getBoolean'],
        'accessories' => ['AdminImportController', 'split'],
        'image_alt' => ['AdminImportController', 'split'],
        'delivery_in_stock' => ['AdminImportController', 'createMultiLangField'],
        'delivery_out_stock' => ['AdminImportController', 'createMultiLangField'],
    ];
    public $separator;
    public $convert;
    public $multiple_value_separator;
    public function __construct()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    /**
     * @return bool|string
     *
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function ajaxProcessuploadCsv()
    {
    }
    public function renderView()
    {
    }
    public function initToolbar()
    {
    }
    protected function generateContentTable($current_table, $nb_column, $handle, $glue)
    {
    }
    public function init()
    {
    }
    public function initContent()
    {
    }
    protected static function rewindBomAware($handle)
    {
    }
    protected static function getBoolean($field)
    {
    }
    protected static function getPrice($field)
    {
    }
    protected static function split($field)
    {
    }
    protected static function createMultiLangField($field)
    {
    }
    protected function getTypeValuesOptions($nb_c)
    {
    }
    /**
     * Return fields to be display AS piece of advise
     *
     * @param bool $in_array
     *
     * @return string|array
     */
    public function getAvailableFields($in_array = \false)
    {
    }
    protected function receiveTab()
    {
    }
    public static function getMaskedRow($row)
    {
    }
    protected static function setDefaultValues(&$info)
    {
    }
    protected static function setEntityDefaultValues(&$entity)
    {
    }
    protected static function fillInfo($infos, $key, &$entity)
    {
    }
    /**
     * @param array $array
     * @param callable $funcname
     *
     * @return bool
     */
    public static function arrayWalk(&$array, $funcname, &$user_data = \false)
    {
    }
    /**
     * copyImg copy an image located in $url and save it in a path
     * according to $entity->$id_entity .
     * $id_image is used if we need to add a watermark.
     *
     * @param int $id_entity id of product or category (set in entity)
     * @param int $id_image (default null) id of the image if watermark enabled
     * @param string $url path or url to use
     * @param string $entity 'products' or 'categories'
     * @param bool $regenerate
     *
     * @return bool
     */
    protected static function copyImg($id_entity, $id_image = \null, $url = '', $entity = 'products', $regenerate = \true)
    {
    }
    protected static function get_best_path($tgt_width, $tgt_height, $path_infos)
    {
    }
    public function categoryImport($offset = \false, $limit = \false, &$crossStepsVariables = \false, $validateOnly = \false)
    {
    }
    protected function categoryImportOne($info, $default_language_id, $id_lang, $force_ids, $regenerate, $shop_is_feature_active, &$cat_moved, $validateOnly = \false)
    {
    }
    public function productImport($offset = \false, $limit = \false, &$crossStepsVariables = \false, $validateOnly = \false, $moreStep = 0)
    {
    }
    protected function productImportAccessories($offset, $limit, &$crossStepsVariables)
    {
    }
    protected function productImportOne($info, $default_language_id, $id_lang, $force_ids, $regenerate, $shop_is_feature_active, $shop_ids, $match_ref, &$accessories, $validateOnly = \false)
    {
    }
    public function productImportCreateCat($default_language_id, $category_name, $id_parent_category = \null)
    {
    }
    public function attributeImport($offset = \false, $limit = \false, &$crossStepsVariables = \false, $validateOnly = \false)
    {
    }
    protected function attributeImportOne($info, $default_language, &$groups, &$attributes, $regenerate, $shop_is_feature_active, $validateOnly = \false)
    {
    }
    public function customerImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function customerImportOne($info, $default_language_id, $id_lang, $shop_is_feature_active, $force_ids, $validateOnly = \false)
    {
    }
    public function addressImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function addressImportOne($info, $force_ids, $validateOnly = \false)
    {
    }
    public function manufacturerImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function manufacturerImportOne($info, $shop_is_feature_active, $regenerate, $force_ids, $validateOnly = \false)
    {
    }
    public function supplierImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function supplierImportOne($info, $shop_is_feature_active, $regenerate, $force_ids, $validateOnly = \false)
    {
    }
    public function aliasImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function aliasImportOne($info, $force_ids, $validateOnly = \false)
    {
    }
    public function storeContactImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    public function storeContactImportOne($info, $shop_is_feature_active, $regenerate, $force_ids, $validateOnly = \false)
    {
    }
    /**
     * @since 1.5.0
     */
    public function supplyOrdersImport($offset = \false, $limit = \false, $validateOnly = \false)
    {
    }
    protected function supplyOrdersImportOne($info, $force_ids, $current_line, $validateOnly = \false)
    {
    }
    public function supplyOrdersDetailsImport($offset = \false, $limit = \false, &$crossStepsVariables = \false, $validateOnly = \false)
    {
    }
    protected function supplyOrdersDetailsImportOne($info, &$products, &$reset, $force_ids, $current_line, $validateOnly = \false)
    {
    }
    public function utf8EncodeArray($array)
    {
    }
    protected function getNbrColumn($handle, $glue)
    {
    }
    protected static function usortFiles($a, $b)
    {
    }
    protected function openCsvFile($offset = \false)
    {
    }
    protected function closeCsvFile($handle)
    {
    }
    protected function excelToCsvFile($filename)
    {
    }
    protected function truncateTables($case)
    {
    }
    public function clearSmartyCache()
    {
    }
    public function postProcess()
    {
    }
    public function importByGroups($offset = \false, $limit = \false, &$results = \null, $validateOnly = \false, $moreStep = 0)
    {
    }
    public static function setLocale()
    {
    }
    protected function addProductWarning($product_name, $product_id = \null, $message = '')
    {
    }
    public function ajaxProcessSaveImportMatchs()
    {
    }
    public function ajaxProcessLoadImportMatchs()
    {
    }
    public function ajaxProcessDeleteImportMatchs()
    {
    }
    public static function getPath($file = '')
    {
    }
    public function ajaxProcessImport()
    {
    }
    public function initModal()
    {
    }
}
/* No max line limit since the lines can be more than 4096. Performance impact is not significant. */
\define('MAX_LINE_SIZE', 0);
/* Used for validatefields diying without user friendly error or not */
\define('UNFRIENDLY_ERROR', \false);
/* this value set the number of columns visible on each page */
\define('MAX_COLUMNS', 6);
