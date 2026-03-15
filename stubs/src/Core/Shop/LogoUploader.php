<?php

namespace PrestaShop\PrestaShop\Core\Shop;

/**
 * Class LogoUploader used to manage upload of Shop logos and favicon.
 */
class LogoUploader
{
    public function __construct(\Shop $shop, \PrestaShop\PrestaShop\Core\Image\ImageFormatConfigurationInterface $imageFormatConfiguration, \PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository, string $imageDirection)
    {
    }
    public function updateHeader()
    {
    }
    public function updateMail()
    {
    }
    public function updateInvoice()
    {
    }
    public function updateFavicon()
    {
    }
    /**
     * Generic function which allows logo upload.
     *
     * @param string $fieldName
     * @param string $logoPrefix
     * @param array<string,array<string,string>> $files[] the array of files to avoid use $_POST
     *
     * @return bool
     *
     * @throws PrestaShopException in case of upload failure
     */
    public function update($fieldName, $logoPrefix, array $files = [])
    {
    }
    public function uploadIco($name, $destination, $files = [])
    {
    }
}
