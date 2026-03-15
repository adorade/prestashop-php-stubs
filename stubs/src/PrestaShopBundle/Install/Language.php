<?php

namespace PrestaShopBundle\Install;

class Language
{
    public $id;
    public $name;
    public $locale;
    public $iso_code;
    public $language_code;
    public $is_rtl;
    public $date_format_lite;
    public $date_format_full;
    public $countries;
    public function __construct($iso)
    {
    }
    public function setPropertiesFromXml($xmlPath)
    {
    }
    /**
     * Get name.
     *
     * @return mixed
     */
    public function getName()
    {
    }
    /**
     * Get locale.
     *
     * @return mixed
     */
    public function getLocale()
    {
    }
    /**
     * Get language_code.
     *
     * @return mixed
     */
    public function getLanguageCode()
    {
    }
    /**
     * Get is_rtl.
     *
     * @return mixed
     */
    public function isRtl()
    {
    }
    /**
     * Get date_format_lite.
     *
     * @return mixed
     */
    public function getDateFormatLite()
    {
    }
    /**
     * Get date_format_full.
     *
     * @return mixed
     */
    public function getDateFormatFull()
    {
    }
    public function getCountries()
    {
    }
}
