<?php

namespace PrestaShop\PrestaShop\Core\Util\String;

/**
 * This class defines reusable methods for strings modifications.
 */
final class StringModifier implements \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface
{
    /**
     * {@inheritdoc}
     */
    public function splitByCamelCase($string)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function cutEnd(string $string, int $expectedLength): string
    {
    }
    /**
     * Return a friendly url made from the provided string
     * If the mbstring library is available, the output is the same as the js function of the same name.
     *
     * @param string $string
     *
     * @return string
     */
    public function str2url(string $string, bool $allow_accented_chars): string
    {
    }
    /**
     * Replace all accented chars by their equivalent non-accented chars.
     *
     * @param string $string
     *
     * @return string
     */
    public function replaceAccentedChars(string $string): string
    {
    }
}
