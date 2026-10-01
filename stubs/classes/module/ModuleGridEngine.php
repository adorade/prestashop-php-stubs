<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
abstract class ModuleGridEngineCore extends \Module
{
    protected $_type;
    public function __construct($type)
    {
    }
    public function install()
    {
    }
    public static function getGridEngines()
    {
    }
    abstract public function setValues($values);
    abstract public function setTitle($title);
    abstract public function setSize($width, $height);
    abstract public function setTotalCount($total_count);
    abstract public function setLimit($start, $limit);
    abstract public function render();
}
