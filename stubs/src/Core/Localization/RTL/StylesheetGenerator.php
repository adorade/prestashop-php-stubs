<?php

namespace PrestaShop\PrestaShop\Core\Localization\RTL;

/**
 * Creates RTL versions of LTR CSS files.
 *
 * This class creates new files based on the original ones by using CSSJanus first,
 * then applying an optional .rtlfix file, if one with the same name as the processed file is found.
 *
 * Inspired by "Localize Fixture" from Mahdi Shad @ iPresta
 *
 * @see https://github.com/iPresta/localize-fixture
 */
class StylesheetGenerator
{
    /**
     * Default file type to look up.
     */
    public const DEFAULT_FILE_TYPE = 'css';
    /**
     * Default suffix to use for RTL transformed files.
     */
    public const DEFAULT_RTL_SUFFIX = '_rtl';
    /**
     * Extension of RTL fix files.
     */
    public const RTLFIX_EXTENSION = 'rtlfix';
    /**
     * @param string $fileType [default='css'] File type (CSS or SCSS)
     * @param string $rtlSuffix [default='_rtl'] Suffix to add to transformed RTL files
     */
    public function __construct($fileType = self::DEFAULT_FILE_TYPE, $rtlSuffix = self::DEFAULT_RTL_SUFFIX)
    {
    }
    /**
     * Creates an RTL version of all the files in the selected path recursively.
     *
     * @param string $directory Path to process. All CSS files in this directory will be processed.
     * @param bool $regenerate [default=false] Indicates if RTL files should be re-generated even if they exist
     *
     * @throws GenerationException
     */
    public function generateInDirectory($directory, $regenerate = false)
    {
    }
}
