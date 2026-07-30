<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * This adapter will complete the new architecture Tools.
 *
 * Please put only wrappers and equivalents from Legacy \Tools class.
 * (only for this purpose, this is not here to put new utils functions).
 */
class Tools
{
    /**
     * Return the friendly url from the provided string.
     *
     * @param string $str
     *
     * @return string
     */
    public function linkRewrite($str)
    {
    }
    /**
     * @param string $html
     * @param string|null $uri_unescape
     * @param bool $allow_style
     *
     * @return string
     */
    public function purifyHTML($html, $uri_unescape = null, $allow_style = false)
    {
    }
    /**
     * @see LegacyTools::refreshCACertFile()
     */
    public function refreshCaCertFile()
    {
    }
    /**
     * @see LegacyTools::generateHtaccess()
     *
     * @return bool
     */
    public function generateHtaccess()
    {
    }
    /**
     * @see HtaccessFileGenerator::generateFile()
     *
     * @return bool
     */
    public function generateHtaccessWithMultiViews()
    {
    }
    /**
     * @see HtaccessFileGenerator::generateFile()
     *
     * @return bool
     */
    public function generateHtaccessWithoutMultiViews()
    {
    }
    /**
     * returns the rounded value of $value to specified precision, according to your configuration;.
     *
     * @note : PHP 5.3.0 introduce a 3rd parameter mode in round function
     *
     * @param float $value
     * @param int $precision
     *
     * @return float
     */
    public function round($value, $precision = 0, $round_mode = null)
    {
    }
    /**
     * Return domain name according to configuration and depending on ssl activation.
     *
     * @param bool $http if true, return domain name with protocol
     * @param bool $entities if true, convert special chars to HTML entities
     *
     * @return string domain
     */
    public function getShopDomainSsl($http = false, $entities = false)
    {
    }
    /**
     * Checks if apache mod exists for mod_rewrite or the server has HTTP_MOD_REWRITE enabled.
     *
     * @return bool
     */
    public function isModRewriteActive()
    {
    }
    /**
     * Copy content.
     *
     * @param string $source
     * @param string $destination
     * @param resource|null $streamContext
     *
     * @return bool|int
     */
    public function copy($source, $destination, $streamContext = null)
    {
    }
    /**
     * Sanitize a string.
     *
     * @param string $value
     * @param bool $allowHtml
     *
     * @return string
     */
    public function sanitize($value, $allowHtml = false)
    {
    }
    /**
     * Get a valid image URL to use from BackOffice.
     *
     * @param string $fileName image file name
     * @param bool $escapeHtmlEntities if true - escape html entities on file name argument
     *
     * @return string image URL
     */
    public function getAdminImageUrl($fileName, $escapeHtmlEntities = false)
    {
    }
    /**
     * Delete unicode class from regular expression patterns.
     *
     * @deprecated Since 8.0.0 and will be removed in the next major.
     *
     * @param string $pattern
     *
     * @return string pattern
     */
    public function cleanNonUnicodeSupport($pattern)
    {
    }
    /**
     * @see LegacyTools::displayDate()
     *
     * @return string
     *
     * @throws \PrestaShopException
     */
    public function displayDate($date, $full = false)
    {
    }
    /**
     * @see LegacyTools::truncateString()
     *
     * @return bool|string
     */
    public function truncateString($text, $length = 120, $options = [])
    {
    }
}
