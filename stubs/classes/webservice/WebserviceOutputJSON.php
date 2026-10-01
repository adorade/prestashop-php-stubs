<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class WebserviceOutputJSONCore implements \WebserviceOutputInterface
{
    public $docUrl = '';
    public $languages = [];
    protected $wsUrl;
    protected $schemaToDisplay;
    /**
     * Current entity.
     */
    protected $currentEntity;
    /**
     * Current association.
     */
    protected $currentAssociatedEntity = [];
    /**
     * Json content.
     */
    protected $content = [];
    public function __construct($languages = [])
    {
    }
    public function setSchemaToDisplay($schema)
    {
    }
    public function getSchemaToDisplay()
    {
    }
    public function setWsUrl($url)
    {
    }
    public function getWsUrl()
    {
    }
    public function getContentType()
    {
    }
    public function renderErrors($message, $code = \null)
    {
    }
    public function renderField($field)
    {
    }
    public function renderNodeHeader($node_name, $params, $more_attr = \null, $has_child = \true)
    {
    }
    public function getNodeName($params)
    {
    }
    public function renderNodeFooter($node_name, $params)
    {
    }
    public function overrideContent($content)
    {
    }
    public function setLanguages($languages)
    {
    }
    public function renderAssociationWrapperHeader()
    {
    }
    public function renderAssociationWrapperFooter()
    {
    }
    public function renderAssociationHeader($obj, $params, $assoc_name, $closed_tags = \false)
    {
    }
    public function renderAssociationFooter($obj, $params, $assoc_name)
    {
    }
    public function renderErrorsHeader()
    {
    }
    public function renderErrorsFooter()
    {
    }
    public function renderAssociationField($field)
    {
    }
    public function renderi18nField($field)
    {
    }
}
