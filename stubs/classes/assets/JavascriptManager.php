<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class JavascriptManagerCore extends \AbstractAssetManager
{
    protected $list;
    protected $valid_position = ['head', 'bottom'];
    protected $valid_attribute = ['async', 'defer'];
    /**
     * @return array
     */
    protected function getDefaultList()
    {
    }
    /**
     * @param string $id
     * @param string $relativePath
     * @param string $position
     * @param int $priority
     * @param bool $inline
     * @param string|null $attribute
     * @param string $server
     * @param string|null $version
     */
    public function register($id, $relativePath, $position = self::DEFAULT_JS_POSITION, $priority = self::DEFAULT_PRIORITY, $inline = \false, $attribute = \null, $server = 'local', ?string $version = \null)
    {
    }
    public function unregisterById($idToRemove)
    {
    }
    /**
     * @param string $id
     * @param string $fullPath
     * @param string $position
     * @param int $priority
     * @param bool $inline
     * @param string $attribute
     * @param string $server
     * @param string|null $version
     */
    protected function add($id, $fullPath, $position, $priority, $inline, $attribute, $server, ?string $version)
    {
    }
    /**
     * @return array
     */
    public function getList()
    {
    }
}
