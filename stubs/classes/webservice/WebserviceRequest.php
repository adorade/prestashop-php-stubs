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
class WebserviceRequestCore
{
    public const HTTP_GET = 1;
    public const HTTP_POST = 2;
    public const HTTP_PUT = 4;
    public const HTTP_PATCH = 8;
    protected $_available_languages = \null;
    /**
     * Errors triggered at execution.
     *
     * @var array
     */
    public $errors = [];
    /**
     * Set if return should display content or not.
     *
     * @var bool
     */
    protected $_outputEnabled = \true;
    /**
     * Set if the management is specific or if it is classic (entity management)
     *
     * @var WebserviceSpecificManagementImages|WebserviceSpecificManagementSearch|WebserviceSpecificManagementAttachments|false
     */
    protected $objectSpecificManagement = \false;
    /**
     * Base PrestaShop webservice URL.
     *
     * @var string
     */
    public $wsUrl;
    /**
     * PrestaShop Webservice Documentation URL.
     *
     * @var string
     */
    protected $_docUrl = 'https://devdocs.prestashop.com/8/webservice';
    /**
     * Set if the authentication key was checked.
     *
     * @var bool
     */
    protected $_authenticated = \false;
    /**
     * HTTP Method to support.
     *
     * @var string
     */
    public $method;
    /**
     * The segment of the URL.
     *
     * @var array
     */
    public $urlSegment = [];
    /**
     * The segment list of the URL after the "api" segment.
     *
     * @var array
     */
    public $urlFragments = [];
    /**
     * The time in microseconds of the start of the execution of the web service request.
     *
     * @var float
     */
    protected $_startTime = 0;
    /**
     * The list of each resources manageable via web service.
     *
     * @var array
     */
    public $resourceList;
    /**
     * The configuration parameters of the current resource.
     *
     * @var array
     */
    public $resourceConfiguration;
    /**
     * The permissions for the current key.
     *
     * @var array
     */
    public $keyPermissions;
    /**
     * The XML string to display if web service call succeed.
     *
     * @var string
     */
    protected $specificOutput = '';
    /**
     * The list of objects to display.
     *
     * @var array
     */
    public $objects;
    /**
     * The current object to support, it extends the PrestaShop ObjectModel.
     *
     * @var ObjectModel
     */
    protected $_object;
    /**
     * The schema to display.
     * If null, no schema have to be displayed and normal management has to be performed.
     *
     * @var string
     */
    public $schemaToDisplay;
    /**
     * The fields to display. These fields will be displayed when retrieving objects.
     *
     * @var string
     */
    public $fieldsToDisplay = 'minimum';
    /**
     * If we are in PUT or POST case, we use this attribute to store the xml string value during process.
     *
     * @var string
     */
    protected $_inputXml;
    /**
     * Object instance for singleton.
     *
     * @var WebserviceRequest|null
     */
    protected static $_instance;
    /**
     * Key used for authentication.
     *
     * @var string
     */
    protected $_key;
    /**
     * This is used to have a deeper tree diagram.
     *
     * @var int
     */
    public $depth = 0;
    /**
     * Name of the output format.
     *
     * @var string
     */
    protected $outputFormat = 'xml';
    /**
     * The object to build the output.
     *
     * @var WebserviceOutputBuilder|null
     */
    protected $objOutput;
    /**
     * Save the class name for override used in getInstance().
     *
     * @var string
     */
    public static $ws_current_classname;
    /**
     * @var array
     */
    public $params;
    /**
     * @var array the list of shop ids, can be empty
     */
    public static $shopIDs = [];
    public function getOutputEnabled()
    {
    }
    public function setOutputEnabled($bool)
    {
    }
    /**
     * Get WebserviceRequest object instance (Singleton).
     *
     * @return object WebserviceRequest instance
     */
    public static function getInstance()
    {
    }
    public static function resetStaticCache(): void
    {
    }
    protected function getOutputObject($type)
    {
    }
    public static function getResources()
    {
    }
    /**
     * This method is used for calculate the price for products on the output details.
     *
     * @param array $field
     * @param ObjectModel $entity_object
     *
     * @return array field parameters
     */
    public function getPriceForProduct($field, $entity_object)
    {
    }
    /**
     * This method is used for calculate the price for products on a virtual fields.
     *
     * @param ObjectModel $entity_object
     * @param array $parameters
     *
     * @return array
     */
    public function specificPriceForProduct($entity_object, $parameters)
    {
    }
    public function specificPriceCalculation($parameters)
    {
    }
    /**
     * This method is used for calculate the price for products on a virtual fields.
     *
     * @param ObjectModel $entity_object
     * @param array $parameters
     *
     * @return array
     */
    public function specificPriceForCombination($entity_object, $parameters)
    {
    }
    /**
     * Start Webservice request
     * Check webservice activation
     * Check authentication
     * Check resource
     * Check HTTP Method
     * Execute the action
     * Display the result.
     *
     * @param string $key
     * @param string $method
     * @param string $url
     * @param array $params
     * @param string $bad_class_name
     * @param string $inputXml
     *
     * @return array Returns an array of results (headers, content, type of resource...)
     */
    public function fetch($key, $method, $url, $params, $bad_class_name, $inputXml = \null)
    {
    }
    protected function webserviceChecks()
    {
    }
    /**
     * Set a webservice error.
     *
     * @param int $status
     * @param string $label
     * @param int $code
     */
    public function setError($status, $label, $code)
    {
    }
    /**
     * Set a webservice error and propose a new value near from the available values.
     *
     * @param int $num
     * @param string $label
     * @param string $value
     * @param array $available_values
     * @param int $code
     */
    public function setErrorDidYouMean($num, $label, $value, $available_values, $code)
    {
    }
    /**
     * Return the nearest value picked in the values list.
     *
     * @param string $input
     * @param array $words
     *
     * @return string
     */
    protected function getClosest($input, $words)
    {
    }
    /**
     * Used to replace the default PHP error handler, in order to display PHP errors in a XML format.
     *
     * @param int $errno contains the level of the error raised, as an integer
     * @param string $errstr contains the error message, as a string
     * @param string $errfile errfile, which contains the filename that the error was raised in, as a string
     * @param int $errline errline, which contains the line number the error was raised at, as an integer
     *
     * @return bool Always return true to avoid the default PHP error handler
     */
    public function webserviceErrorHandler($errno, $errstr, $errfile, $errline)
    {
    }
    /**
     * Check if there is one or more error.
     *
     * @return bool
     */
    protected function hasErrors()
    {
    }
    /**
     * Check request authentication.
     *
     * @return bool
     */
    protected function authenticate()
    {
    }
    /**
     * Check webservice activation.
     *
     * @return bool
     */
    protected function isActivated()
    {
    }
    /**
     * @param string $key
     *
     * @return bool
     */
    protected function shopHasRight($key)
    {
    }
    /**
     * @param array $params
     *
     * @return bool
     */
    protected function shopExists($params)
    {
    }
    /**
     * @param array $params
     *
     * @return bool
     */
    protected function groupShopExists($params)
    {
    }
    /**
     * Check HTTP method.
     *
     * @return bool
     */
    protected function checkHTTPMethod()
    {
    }
    /**
     * Check resource validity.
     *
     * @return bool
     */
    protected function checkResource()
    {
    }
    protected function setObjects()
    {
    }
    protected function parseDisplayFields($str)
    {
    }
    public function setFieldsToDisplay()
    {
    }
    protected function manageFilters()
    {
    }
    public function getFilteredObjectList()
    {
    }
    public function getFilteredObjectDetails()
    {
    }
    /**
     * Execute GET and HEAD requests.
     *
     * Build filter
     * Build fields display
     * Build sort
     * Build limit
     *
     * @return bool
     */
    public function executeEntityGetAndHead()
    {
    }
    /**
     * Execute POST method on a PrestaShop entity.
     *
     * @return bool
     */
    public function executeEntityPost()
    {
    }
    /**
     * Execute PUT method on a PrestaShop entity.
     *
     * @return bool
     */
    public function executeEntityPut()
    {
    }
    /**
     * Execute PATCH method on a PrestaShop entity.
     *
     * @return bool
     */
    public function executeEntityPatch(): bool
    {
    }
    /**
     * Execute DELETE method on a PrestaShop entity.
     *
     * @return void
     */
    public function executeEntityDelete()
    {
    }
    /**
     * save Entity Object from XML.
     *
     * @param int $successReturnCode
     *
     * @return bool
     */
    protected function saveEntityFromXml($successReturnCode)
    {
    }
    /**
     * @param string $sqlId
     * @param string $filterValue
     * @param string $tableAlias default value is 'main.'
     *
     * @return string
     */
    protected function getSQLRetrieveFilter($sqlId, $filterValue, $tableAlias = 'main.')
    {
    }
    public function filterLanguage()
    {
    }
    /**
     * Thanks to the (WebserviceOutputBuilder) WebserviceKey::objOutput
     * Method build the output depend on the WebserviceRequest::outputFormat
     * and set HTTP header parameters.
     *
     * @return array with displaying informations (used in the dispatcher)
     */
    protected function returnOutput()
    {
    }
    /**
     * @return array
     */
    public static function getallheaders()
    {
    }
    /**
     * Set Object Specific Management
     *
     * @param mixed $objectSpecificManagement
     */
    public function setObjectSpecificManagement($objectSpecificManagement)
    {
    }
}
