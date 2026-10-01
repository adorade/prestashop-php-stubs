<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
