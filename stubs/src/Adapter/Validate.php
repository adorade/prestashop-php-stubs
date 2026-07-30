<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Adapter for Validate Legacy class.
 */
class Validate
{
    /**
     * @param mixed $way
     *
     * @return bool
     */
    public static function isOrderWay($way)
    {
    }
    /**
     * @param mixed $order
     *
     * @return bool
     */
    public static function isOrderBy($order)
    {
    }
    /**
     * @param mixed $date
     *
     * @return bool
     */
    public static function isDate($date)
    {
    }
    /**
     * Check if HTML content is clean.
     *
     * @param string $html
     * @param bool $allowIframe
     *
     * @return bool
     */
    public function isCleanHtml($html, $allowIframe = false)
    {
    }
    /**
     * Check for a given email validity.
     *
     * @param string $email
     *
     * @return bool
     */
    public function isEmail(string $email): bool
    {
    }
    /**
     * Check for module name validity.
     *
     * @param string $name Module name to validate
     *
     * @return bool
     */
    public function isModuleName($name)
    {
    }
    /**
     * Check if object has been correctly loaded.
     *
     * @param object $object Object to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isLoadedObject($object)
    {
    }
    /**
     * Check for Language Iso Code.
     *
     * @param string $isoCode
     *
     * @return bool
     */
    public function isLangIsoCode($isoCode)
    {
    }
    /**
     * Check for an integer validity (unsigned).
     *
     * @param int $value Integer to validate
     *
     * @return bool
     */
    public function isUnsignedInt($value)
    {
    }
    /**
     * Check for a rewritten url validity.
     *
     * @param string $value
     *
     * @return bool
     */
    public function isLinkRewrite($value)
    {
    }
    /**
     * Check the given string is a valid object class name
     *
     * @param string $objectClassName object class name
     *
     * @return bool
     */
    public static function isValidObjectClassName(string $objectClassName): bool
    {
    }
}
