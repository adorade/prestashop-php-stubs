<?php

namespace PrestaShopBundle\Install;

class LanguageList
{
    public const DEFAULT_ISO = 'en';
    /**
     * @var array List of available languages
     */
    protected $languages;
    /**
     * @var string Current language
     */
    protected $language;
    public $locale;
    public $id;
    /**
     * @var Language Default language (english)
     */
    protected $default;
    protected static $_instance;
    public static function getInstance()
    {
    }
    public function __construct()
    {
    }
    /**
     * Set current language.
     *
     * @param string $iso Language iso
     */
    public function setLanguage($iso)
    {
    }
    /**
     * Get current language.
     *
     * @return string
     */
    public function getLanguageIso()
    {
    }
    /**
     * Get current language.
     *
     * @return Language
     */
    public function getLanguage($iso = null)
    {
    }
    public function getIsoList()
    {
    }
    /**
     * Get list of languages iso supported by installer.
     *
     * @return array
     */
    public function getLanguages()
    {
    }
    /**
     * Get list of countries for current language.
     *
     * @return array
     */
    public function getCountries()
    {
    }
    /**
     * @param string|null $iso
     *
     * @return array
     */
    public function getCountriesByLanguage(?string $iso = null): array
    {
    }
    /**
     * Parse HTTP_ACCEPT_LANGUAGE and get first data matching list of available languages.
     *
     * @return bool|array
     */
    public function detectLanguage()
    {
    }
}
