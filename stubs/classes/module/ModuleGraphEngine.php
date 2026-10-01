<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
abstract class ModuleGraphEngineCore extends \Module
{
    protected $_type;
    public function __construct($type)
    {
    }
    public function install()
    {
    }
    public static function getGraphEngines()
    {
    }
    abstract public function createValues($values);
    abstract public function setSize($width, $height);
    abstract public function setLegend($legend);
    abstract public function setTitles($titles);
    abstract public function draw();
}
