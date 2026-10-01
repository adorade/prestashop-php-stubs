<?php

namespace PrestaShop\PrestaShop\Core\Addon;

interface AddonManagerInterface
{
    public function install($source);
    public function uninstall($name);
    public function upgrade($name, $version, $source = null);
    public function enable($name);
    public function disable($name);
    public function reset($name);
    public function getError($name);
}
