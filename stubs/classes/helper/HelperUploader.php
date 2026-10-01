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
class HelperUploaderCore extends \Uploader
{
    public const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/uploader';
    public const DEFAULT_TEMPLATE = 'simple.tpl';
    public const DEFAULT_AJAX_TEMPLATE = 'ajax.tpl';
    public const TYPE_IMAGE = 'image';
    public const TYPE_FILE = 'file';
    protected $_template;
    public function setContext($value)
    {
    }
    public function getContext()
    {
    }
    public function setDropZone($value)
    {
    }
    public function getDropZone()
    {
    }
    public function setId($value)
    {
    }
    public function getId()
    {
    }
    public function setFiles($value)
    {
    }
    public function getFiles()
    {
    }
    public function setMaxFiles($value)
    {
    }
    public function getMaxFiles()
    {
    }
    public function setMultiple($value)
    {
    }
    /**
     * @param $value
     *
     * @return static
     */
    public function setName($value)
    {
    }
    public function getName()
    {
    }
    public function setPostMaxSize($value)
    {
    }
    public function getPostMaxSize()
    {
    }
    public function setTemplate($value)
    {
    }
    public function getTemplate()
    {
    }
    public function setTemplateDirectory($value)
    {
    }
    public function getTemplateDirectory()
    {
    }
    public function getTemplateFile($template)
    {
    }
    public function setTitle($value)
    {
    }
    public function getTitle()
    {
    }
    public function setUrl($value)
    {
    }
    public function getUrl()
    {
    }
    public function setUseAjax($value)
    {
    }
    public function isMultiple()
    {
    }
    public function render()
    {
    }
    public function useAjax()
    {
    }
}
