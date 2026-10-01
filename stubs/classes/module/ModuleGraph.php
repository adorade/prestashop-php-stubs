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
abstract class ModuleGraphCore extends \Module
{
    protected $_employee;
    /** @var array of integers graph data */
    protected $_values = [];
    /** @var array of strings graph legends (X axis) */
    protected $_legend = [];
    /** @var array string graph titles */
    protected $_titles = ['main' => \null, 'x' => \null, 'y' => \null];
    /** @var ModuleGraphEngine graph engine */
    protected $_render;
    /** @var int */
    protected $_id_lang;
    /** @var string */
    protected $_csv;
    abstract protected function getData($layers);
    public function setEmployee($id_employee)
    {
    }
    public function setLang($id_lang)
    {
    }
    protected function setDateGraph($layers, $legend = \false)
    {
    }
    protected function csvExport($datas)
    {
    }
    protected function _displayCsv()
    {
    }
    public function create($render, $type, $width, $height, $layers)
    {
    }
    public function draw()
    {
    }
    /**
     * @todo Set this method as abstracted ? Quid of module compatibility.
     */
    public function setOption($option, $layers = 1)
    {
    }
    public function engine($params)
    {
    }
    protected static function getEmployee($employee = \null, \Context $context = \null)
    {
    }
    public function getDate()
    {
    }
    public static function getDateBetween($employee = \null)
    {
    }
    public function getLang()
    {
    }
    /**
     * Escape cell content.
     * If the content begins with =+-@ a quote is added at the beginning of
     * the string.
     * In all situation, add double quote to encapsulate the content.
     *
     * @param string $content
     *
     * @return string
     */
    public function escapeCell(string $content): string
    {
    }
}
