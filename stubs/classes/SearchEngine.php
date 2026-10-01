<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class SearchEngineCore.
 */
class SearchEngineCore extends \ObjectModel
{
    public $server;
    public $getvar;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'search_engine', 'primary' => 'id_search_engine', 'fields' => ['server' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl', 'required' => \true, 'size' => 64], 'getvar' => ['type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'required' => \true, 'size' => 16]]];
    /**
     * Get keywords.
     *
     * @param string $url
     *
     * @return bool|string
     */
    public static function getKeywords($url)
    {
    }
}
