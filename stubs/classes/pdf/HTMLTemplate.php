<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
abstract class HTMLTemplateCore
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $date;
    /**
     * @var bool
     */
    public $available_in_your_account = \true;
    /**
     * @var Smarty
     */
    public $smarty;
    /**
     * @var Shop
     */
    public $shop;
    /**
     * @var Order|null
     */
    public $order;
    /**
     * Returns the template's HTML header.
     *
     * @return string HTML header
     */
    public function getHeader()
    {
    }
    /**
     * Returns the template's HTML footer.
     *
     * @return string HTML footer
     */
    public function getFooter()
    {
    }
    /**
     * Returns the shop address.
     *
     * @return string
     */
    protected function getShopAddress()
    {
    }
    /**
     * Returns the invoice logo.
     *
     * @return string|null
     */
    protected function getLogo()
    {
    }
    /**
     * Assign common header data to smarty variables.
     */
    public function assignCommonHeaderData()
    {
    }
    /**
     * Assign hook data.
     *
     * @param ObjectModel $object generally the object used in the constructor
     */
    public function assignHookData($object)
    {
    }
    /**
     * Returns the template's HTML content.
     *
     * @return string HTML content
     */
    abstract public function getContent();
    /**
     * Returns the template filename.
     *
     * @return string filename
     */
    abstract public function getFilename();
    /**
     * Returns the template filename when using bulk rendering.
     *
     * @return string filename
     */
    abstract public function getBulkFilename();
    /**
     * If the template is not present in the theme directory, it will return the default template
     * in _PS_PDF_DIR_ directory.
     *
     * @param string $template_name
     *
     * @return string
     */
    protected function getTemplate($template_name)
    {
    }
    /**
     * Translation method.
     *
     * @param string $string
     *
     * @return string translated text
     */
    protected static function l($string)
    {
    }
    protected function setShopId()
    {
    }
    /**
     * Returns the template's HTML pagination block.
     *
     * @return string HTML pagination block
     */
    public function getPagination()
    {
    }
}
