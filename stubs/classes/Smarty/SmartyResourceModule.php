<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Override module templates easily.
 */
class SmartyResourceModuleCore extends \Smarty_Resource_Custom
{
    /**
     * @var array<string>
     */
    public $paths;
    /**
     * @var bool
     */
    public $isAdmin;
    public function __construct(array $paths, $isAdmin = \false)
    {
    }
    /**
     * Fetch a template.
     *
     * @param string $name template name
     * @param string $source template source
     * @param int $mtime template modification timestamp (epoch)
     */
    protected function fetch($name, &$source, &$mtime)
    {
    }
}
