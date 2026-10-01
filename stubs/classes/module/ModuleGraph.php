<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    protected static function getEmployee($employee = \null, ?\Context $context = \null)
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
