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
 * @todo : Create typed exception for more finer errors check
 */
class WebserviceOutputBuilderCore
{
    /**
     * @var int constant
     */
    public const VIEW_LIST = 1;
    public const VIEW_DETAILS = 2;
    protected $wsUrl;
    protected $output;
    /** @var WebserviceOutputInterface|WebserviceOutputXML|WebserviceOutputJSON|null */
    public $objectRender;
    protected $wsResource;
    protected $depth = 0;
    protected $schemaToDisplay;
    protected $fieldsToDisplay;
    protected $specificFields = [];
    protected $virtualFields = [];
    protected $statusInt;
    protected $wsParamOverrides;
    protected static $_cache_ws_parameters = [];
    /* Header properties */
    protected $headerParams = ['Access-Time' => 0, 'X-Powered-By' => 0, 'PSWS-Version' => 0, 'Content-Type' => 0];
    /**
     * @var string Status header sent at return
     */
    protected $status;
    public function __construct($ws_url)
    {
    }
    /**
     * Set the render object for set the output format.
     * Set the Content-type for the http header.
     *
     * @param WebserviceOutputInterface $obj_render
     * @throw WebserviceException if the object render is not an instance of WebserviceOutputInterface
     *
     * @return $this
     *
     * @throws WebserviceException
     */
    public function setObjectRender(\WebserviceOutputInterface $obj_render)
    {
    }
    /**
     * getter.
     *
     * @return WebserviceOutputInterface
     */
    public function getObjectRender()
    {
    }
    /**
     * Need to have the resource list to get the class name for an entity,
     * To build.
     *
     * @param array $resources
     *
     * @return $this
     */
    public function setWsResources($resources)
    {
    }
    /**
     * This method return an array with each http header params for a content.
     * This check each required params.
     *
     * If this method is overrided don't forget to check required specific params (for xml etc...)
     *
     * @return array
     */
    public function buildHeader()
    {
    }
    /**
     * @param string $key The normalized key expected for an http response
     * @param string $value
     *
     * @return $this
     *
     * @throws WebserviceException If the key or the value are corrupted (use Validate::isCleanHtml method)
     */
    public function setHeaderParams($key, $value)
    {
    }
    /**
     * @param string|null $key if null get all header params otherwise the params specified by the key
     * @throw WebserviceException if the key is corrupted (use Validate::isCleanHtml method)
     * @throw WebserviceException if the asked key does'nt exists.
     *
     * @return array|int
     */
    public function getHeaderParams($key = \null)
    {
    }
    /**
     * Delete all Header parameters previously set.
     *
     * @return $this
     */
    public function resetHeaderParams()
    {
    }
    /**
     * @return string the normalized status for http request
     */
    public function getStatus()
    {
    }
    public function getStatusInt()
    {
    }
    /**
     * Set the return header status.
     *
     * @param int $num the Http status code
     */
    public function setStatus($num)
    {
    }
    /**
     * Build errors output using an error array.
     *
     * @param array $errors
     *
     * @return string output in the format specified by WebserviceOutputBuilder::objectRender
     */
    public function getErrors($errors)
    {
    }
    /**
     * Build the resource list in the output format specified by WebserviceOutputBuilder::objectRender.
     *
     * @param array $key_permissions
     *
     * @return string
     */
    public function getResourcesList($key_permissions)
    {
    }
    public function registerOverrideWSParameters($wsrObject, $method)
    {
    }
    /**
     * Method is used for each content type
     * Different content types are :
     * - list of entities,
     * - tree diagram of entity details (full or minimum),
     * - schema (synopsis & blank),.
     *
     * @param array $objects each object created by entity asked
     *
     *        @see WebserviceOutputBuilder::executeEntityGetAndHead
     *
     * @param string|null $schema_to_display if null display the entities list or entity details
     * @param string|array $fields_to_display the fields allow for the output
     * @param int $depth depth for the tree diagram output
     * @param int $type_of_view use the 2 constants WebserviceOutputBuilder::VIEW_LIST WebserviceOutputBuilder::VIEW_DETAILS
     *
     * @return string in the output format specified by WebserviceOutputBuilder::objectRender
     */
    public function getContent($objects, $schema_to_display = \null, $fields_to_display = 'minimum', $depth = 0, $type_of_view = self::VIEW_LIST, $override = \true)
    {
    }
    /**
     * Create the tree diagram with no details.
     *
     * @param ObjectModel $object create by the entity
     * @param int $depth the depth for the tree diagram
     *
     * @return string
     */
    public function renderEntityMinimum($object, $depth)
    {
    }
    /**
     * Build a schema blank or synopsis.
     *
     * @param ObjectModel $object create by the entity
     * @param array $ws_params webserviceParams from the entity
     *
     * @return string
     */
    protected function renderSchema($object, $ws_params)
    {
    }
    /**
     * Build the entity detail.
     *
     * @param ObjectModel $object create by the entity
     * @param int $depth the depth for the tree diagram
     *
     * @return string
     */
    public function renderEntity($object, $depth)
    {
    }
    /**
     * Build a field and use recursivity depend on the depth parameter.
     *
     * @param ObjectModel $object create by the entity
     * @param array $ws_params webserviceParams from the entity
     * @param string $field_name
     * @param array $field
     * @param int $depth
     *
     * @return string
     */
    protected function renderField($object, $ws_params, $field_name, $field, $depth)
    {
    }
    /**
     * @param ObjectModel $object
     * @param int $depth
     * @param array $associations
     * @param array $ws_params
     *
     * @return string
     */
    protected function renderAssociations($object, $depth, $associations, $ws_params)
    {
    }
    protected function renderFlatAssociation($object, $depth, $assoc_name, $resource_name, $fields_assoc, $object_assoc, $parent_details)
    {
    }
    public function setIndent($depth)
    {
    }
    public function getSynopsisDetails($field)
    {
    }
    /**
     * @param string|object $object
     * @param string $method
     * @param string $field_name
     * @param string $entity_name
     *
     * @return $this
     *
     * @throws Exception
     * @throws WebserviceException
     */
    public function setSpecificField($object, $method, $field_name, $entity_name)
    {
    }
    protected function validateObjectAndMethod($object, $method)
    {
    }
    public function getSpecificField()
    {
    }
    protected function overrideSpecificField($entity_name, $field_name, $field, $entity_object, $ws_params)
    {
    }
    public function setVirtualField($object, $method, $entity_name, $parameters)
    {
    }
    public function getVirtualFields()
    {
    }
    public function addVirtualFields($entity_name, $entity_object)
    {
    }
    public function setFieldsToDisplay($fields)
    {
    }
}
