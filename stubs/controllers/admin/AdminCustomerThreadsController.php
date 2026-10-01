<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property CustomerThread $object
 */
class AdminCustomerThreadsControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function renderList()
    {
    }
    public function initToolbar()
    {
    }
    public function printOptinIcon($value, $customer)
    {
    }
    public function postProcess()
    {
    }
    /**
     * AdminController::initContent() override.
     *
     * @see AdminController::initContent()
     */
    public function initContent()
    {
    }
    protected function openUploadedFile(bool $forceDownload = \true)
    {
    }
    public function renderKpis()
    {
    }
    /**
     * @return string|void
     *
     * @throws PrestaShopException
     * @throws PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function renderView()
    {
    }
    public function getTimeline($messages, $id_order)
    {
    }
    protected function displayMessage(array $message, string|bool $email = \false, ?int $id_employee = \null)
    {
    }
    protected function displayButton(string $content)
    {
    }
    public function renderOptions()
    {
    }
    public function updateOptionPsSavImapOpt($value)
    {
    }
    public function ajaxProcessMarkAsRead()
    {
    }
    /**
     * Call the IMAP synchronization during an AJAX process.
     *
     * @throws PrestaShopException
     */
    public function ajaxProcessSyncImap()
    {
    }
    /**
     * Call the IMAP synchronization during the render process.
     */
    public function renderProcessSyncImap()
    {
    }
    /**
     * Imap synchronization method.
     *
     * @return array errors list
     */
    public function syncImap()
    {
    }
    protected function getEncoding($structure)
    {
    }
}
