<?php

namespace PrestaShop\PrestaShop\Core\Domain\Combination;

/**
 * Defines settings for combination.
 * If related Value Object does not exist, then various settings (e.g. regex, length constraints) are saved here
 */
class CombinationSettings
{
    /**
     * Bellow constants define maximum allowed length of combination properties
     */
    public const MAX_AVAILABLE_NOW_LABEL_LENGTH = 255;
    public const MAX_AVAILABLE_LATER_LABEL_LENGTH = 255;
}
