<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\Command;

/**
 * Uploads logo image files
 */
class UploadLogosCommand
{
    /**
     * @return UploadedFile|null
     */
    public function getUploadedHeaderLogo()
    {
    }
    /**
     * @param UploadedFile $uploadedHeaderLogo
     *
     * @throws NotSupportedLogoImageExtensionException
     * @throws FileUploadException
     */
    public function setUploadedHeaderLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedHeaderLogo)
    {
    }
    /**
     * @return UploadedFile|null
     */
    public function getUploadedInvoiceLogo()
    {
    }
    /**
     * @param UploadedFile $uploadedInvoiceLogo
     *
     * @throws NotSupportedMailAndInvoiceImageExtensionException
     * @throws FileUploadException
     */
    public function setUploadedInvoiceLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedInvoiceLogo)
    {
    }
    /**
     * @return UploadedFile|null
     */
    public function getUploadedMailLogo()
    {
    }
    /**
     * @param UploadedFile $uploadedMailLogo
     *
     * @throws NotSupportedMailAndInvoiceImageExtensionException
     * @throws FileUploadException
     */
    public function setUploadedMailLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedMailLogo)
    {
    }
    /**
     * @return UploadedFile|null
     */
    public function getUploadedFavicon()
    {
    }
    /**
     * @param UploadedFile $uploadedFavicon
     *
     * @throws NotSupportedFaviconExtensionException
     * @throws FileUploadException
     */
    public function setUploadedFavicon(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFavicon)
    {
    }
}
