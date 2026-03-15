<?php

namespace PrestaShop\PrestaShop\Core\Addon;

class AddonListFilterType
{
    /* Bitwise operator */
    public const THEME = 1;
    public const MODULE = 2;
    public const SERVICE = 4;
    public const ALL = 7;
    /* = 1 | 2 | 4 */
}
