<?php

/**
 * DataLang classes are used by Language
 * to update existing entities in the database whenever a new language is installed.
 * Each *Lang subclass corresponds to a database table.
 *
 * @see Language::updateMultilangFromClass()
 */
class DataLangCore
{
    /** @var TranslatorInterface */
    protected $translator;
    /** @var string Locale to translate to */
    protected $locale;
    /** @var string[] Table primary key */
    protected $keys;
    /** @var string[] Database fields to translate */
    protected $fieldsToUpdate;
    /** @var string Default translation domain */
    protected $domain;
    /**
     * @param string $locale
     * @param TranslatorInterface|null $translator If defined, use this translator
     */
    public function __construct($locale, ?\PrestaShopBundle\Translation\TranslatorInterface $translator = \null)
    {
    }
    /**
     * Translates a value to the current locale
     *
     * @param string $field Name of the database field to translate
     * @param string $value Value to translate
     *
     * @return string Translated value
     */
    public function getFieldValue($field, $value)
    {
    }
    /**
     * Returns the table primary key
     *
     * @return string[]
     */
    public function getKeys()
    {
    }
    /**
     * Returns the list of database fields to update
     *
     * @return string[]
     */
    public function getFieldsToUpdate()
    {
    }
    /**
     * Creates a slug from the provided string
     *
     * @param string $string
     *
     * @return string
     */
    public function slugify($string)
    {
    }
    /**
     * Returns the default translation domain
     *
     * @return string
     */
    public function getDomain()
    {
    }
    /**
     * Returns the table name where the translations are to be performed
     *
     * @return string
     */
    public function getTableName(): string
    {
    }
}
