<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * @since 1.5
 */
class PDFGeneratorCore extends \TCPDF
{
    public const DEFAULT_FONT = 'helvetica';
    /**
     * @var string
     */
    public $header;
    /**
     * @var string
     */
    public $footer;
    /**
     * @var string
     */
    public $pagination;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $font;
    /**
     * @var array
     */
    public $font_by_lang = ['ja' => 'cid0jp', 'bg' => 'freeserif', 'ru' => 'freeserif', 'uk' => 'freeserif', 'mk' => 'freeserif', 'el' => 'freeserif', 'en' => 'dejavusans', 'vn' => 'dejavusans', 'pl' => 'dejavusans', 'ar' => 'dejavusans', 'fa' => 'dejavusans', 'ur' => 'dejavusans', 'az' => 'dejavusans', 'ca' => 'dejavusans', 'gl' => 'dejavusans', 'hr' => 'dejavusans', 'sr' => 'dejavusans', 'si' => 'dejavusans', 'cs' => 'dejavusans', 'sk' => 'dejavusans', 'ka' => 'dejavusans', 'he' => 'dejavusans', 'lo' => 'dejavusans', 'lt' => 'dejavusans', 'lv' => 'dejavusans', 'tr' => 'dejavusans', 'ko' => 'cid0kr', 'zh' => 'cid0cs', 'tw' => 'cid0cs', 'th' => 'freeserif', 'hy' => 'freeserif'];
    /**
     * @param bool $use_cache
     * @param string $orientation
     */
    public function __construct($use_cache = \false, $orientation = 'P')
    {
    }
    /**
     * set the PDF encoding.
     *
     * @param string $encoding
     */
    public function setEncoding($encoding)
    {
    }
    /**
     * set the PDF header.
     *
     * @param string $header HTML
     */
    public function createHeader($header)
    {
    }
    /**
     * set the PDF footer.
     *
     * @param string $footer HTML
     */
    public function createFooter($footer)
    {
    }
    /**
     * create the PDF content.
     *
     * @param string $content HTML
     */
    public function createContent($content)
    {
    }
    /**
     * create the PDF pagination.
     *
     * @param string $pagination HTML
     */
    public function createPagination($pagination)
    {
    }
    /**
     * Change the font.
     *
     * @param string $iso_lang
     */
    public function setFontForLang($iso_lang)
    {
    }
    /**
     * @see TCPDF::Header()
     */
    public function Header()
    {
    }
    /**
     * @see TCPDF::Footer()
     */
    public function Footer()
    {
    }
    /**
     * Render HTML template.
     *
     * @param string $filename
     * @param bool|string $display true:display to user, false:save, 'I','D','S' as fpdf display
     *
     * @throws PrestaShopException
     *
     * @return string HTML rendered
     */
    public function render($filename, $display = \true)
    {
    }
    /**
     * Write a PDF page.
     */
    public function writePage()
    {
    }
    /**
     * Override of TCPDF::getRandomSeed() - getmypid() is blocked on several hosting.
     *
     * @param string $seed
     *
     * @return string
     */
    protected function getRandomSeed($seed = '')
    {
    }
}
