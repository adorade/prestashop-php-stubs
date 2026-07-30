<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * Interface LanguageInterface defines a language object (iso code, locale,
 * if it is an RTL language, ...)
 */
interface LanguageInterface
{
    /**
     * Database id
     *
     * @return int
     */
    public function getId();
    /**
     * Explicit name of the language
     *
     * @return string
     */
    public function getName();
    /**
     * 2-letter iso code
     *
     * @return string
     */
    public function getIsoCode();
    /**
     * 5-letter iso code
     *
     * @return string
     */
    public function getLocale();
    /**
     * 5-letter iso code
     *
     * @return string
     */
    public function getLanguageCode();
    /**
     * Is the language RTL (read from right to left)
     *
     * @return bool
     */
    public function isRTL();
}
