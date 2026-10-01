<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public $font_by_lang = ['ja' => 'cid0jp', 'bg' => 'freeserif', 'ru' => 'freeserif', 'uk' => 'freeserif', 'mk' => 'freeserif', 'el' => 'freeserif', 'en' => 'dejavusans', 'vn' => 'dejavusans', 'pl' => 'dejavusans', 'ar' => 'dejavusans', 'fa' => 'dejavusans', 'ur' => 'dejavusans', 'az' => 'dejavusans', 'ca' => 'dejavusans', 'gl' => 'dejavusans', 'hr' => 'dejavusans', 'sr' => 'dejavusans', 'si' => 'dejavusans', 'cs' => 'dejavusans', 'sk' => 'dejavusans', 'ka' => 'dejavusans', 'he' => 'dejavusans', 'lo' => 'dejavusans', 'lt' => 'dejavusans', 'lv' => 'dejavusans', 'tr' => 'dejavusans', 'ro' => 'dejavusans', 'ko' => 'cid0kr', 'zh' => 'cid0cs', 'tw' => 'cid0cs', 'th' => 'freeserif', 'hy' => 'freeserif'];
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
     * @return string HTML rendered
     *
     * @throws PrestaShopException
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
