<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\Command;

/**
 * Uploads logo image files
 */
class UploadLogosCommand
{
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getUploadedHeaderLogo()
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedHeaderLogo
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\NotSupportedLogoImageExtensionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function setUploadedHeaderLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedHeaderLogo)
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getUploadedInvoiceLogo()
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedInvoiceLogo
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\NotSupportedMailAndInvoiceImageExtensionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function setUploadedInvoiceLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedInvoiceLogo)
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getUploadedMailLogo()
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedMailLogo
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\NotSupportedMailAndInvoiceImageExtensionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function setUploadedMailLogo(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedMailLogo)
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getUploadedFavicon()
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFavicon
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\NotSupportedFaviconExtensionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function setUploadedFavicon(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFavicon)
    {
    }
}
