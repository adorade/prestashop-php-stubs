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
