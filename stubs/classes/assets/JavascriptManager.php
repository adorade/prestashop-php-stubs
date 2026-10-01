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
