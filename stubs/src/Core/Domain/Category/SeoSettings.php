<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category;

/**
 * Defines settings for Category's SEO
 */
final class SeoSettings
{
    /**
     * Maximum length of SEO title (value is constrained by database)
     */
    public const MAX_TITLE_LENGTH = 255;
    /**
     * Recommended length of SEO title
     */
    public const RECOMMENDED_TITLE_LENGTH = 70;
    /**
     * Maximum length of SEO description (value is constrained by database)
     */
    public const MAX_DESCRIPTION_LENGTH = 512;
    /**
     * Recommended length of SEO description
     */
    public const RECOMMENDED_DESCRIPTION_LENGTH = 160;
}
