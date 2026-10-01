<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class HTMLTemplateOrderReturnCore extends \HTMLTemplate
{
    /**
     * @var OrderReturn
     */
    public $order_return;
    /**
     * @var Order
     */
    public $order;
    /**
     * @param OrderReturn $order_return
     * @param Smarty $smarty
     *
     * @throws PrestaShopException
     */
    public function __construct(\OrderReturn $order_return, \Smarty $smarty)
    {
    }
    /**
     * Returns the template's HTML content.
     *
     * @return string HTML content
     */
    public function getContent()
    {
    }
    /**
     * Returns the template filename.
     *
     * @return string filename
     */
    public function getFilename()
    {
    }
    /**
     * Returns the template filename when using bulk rendering.
     *
     * @return string filename
     */
    public function getBulkFilename()
    {
    }
    /**
     * Returns the template's HTML header.
     *
     * @return string HTML header
     */
    public function getHeader()
    {
    }
}
