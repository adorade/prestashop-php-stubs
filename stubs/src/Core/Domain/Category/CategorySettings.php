<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category;

/**
 * Defines settings for category.
 * If related Value Object does not exist, then various settings (e.g. regex, length constraints) are saved here
 */
class CategorySettings
{
    /**
     * Bellow constants define maximum allowed length of category properties
     */
    public const MAX_TITLE_LENGTH = 128;
}
