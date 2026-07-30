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
abstract class ModuleGridCore extends \Module
{
    protected $_employee;
    /** @var array of strings graph data */
    protected $_values = [];
    /** @var int total number of values * */
    protected $_totalCount = 0;
    /** @var string graph titles */
    protected $_title;
    /** @var int start */
    protected $_start;
    /** @var int limit */
    protected $_limit;
    /** @var string column name on which to sort */
    protected $_sort = \null;
    /** @var string sort direction DESC/ASC */
    protected $_direction = \null;
    /** @var ModuleGridEngine grid engine */
    protected $_render;
    /** @var int */
    protected $_id_lang;
    /** @var string */
    protected $_csv;
    abstract protected function getData();
    public function setEmployee($id_employee)
    {
    }
    public function setLang($id_lang)
    {
    }
    public function create($render, $type, $width, $height, $start, $limit, $sort, $dir)
    {
    }
    public function render()
    {
    }
    public function engine($params)
    {
    }
    protected function csvExport($datas)
    {
    }
    protected function _displayCsv()
    {
    }
    public function getDate()
    {
    }
    public function getLang()
    {
    }
    /**
     * @todo Set this method as abstracted ? Quid of module compatibility.
     */
    public function setOption($option, $layers = 1)
    {
    }
}
