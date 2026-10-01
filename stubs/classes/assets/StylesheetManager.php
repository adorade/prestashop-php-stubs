<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class StylesheetManagerCore extends \AbstractAssetManager
{
    protected function getDefaultList()
    {
    }
    /**
     * @param string $id
     * @param string $relativePath
     * @param string $media
     * @param int $priority
     * @param bool $inline
     * @param string $server
     * @param bool $needRtl
     * @param string|null $version
     */
    public function register($id, $relativePath, $media = self::DEFAULT_MEDIA, $priority = self::DEFAULT_PRIORITY, $inline = \false, $server = 'local', $needRtl = \true, ?string $version = \null)
    {
    }
    public function unregisterById($idToRemove)
    {
    }
    /**
     * @return array
     */
    public function getList()
    {
    }
    /**
     * @param string $id
     * @param string $fullPath
     * @param string $media
     * @param int $priority
     * @param bool $inline
     * @param string $server
     * @param string|null $version
     */
    protected function add($id, $fullPath, $media, $priority, $inline, $server, ?string $version)
    {
    }
}
