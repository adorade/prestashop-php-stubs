<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Uploads profile logo image
 */
final class ProfileImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * @param string $profileImageDir
     * @param string $tmpImageDir
     */
    public function __construct(string $profileImageDir = _PS_PROFILE_IMG_DIR_, string $tmpImageDir = _PS_TMP_IMG_DIR_)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function upload($profileId, \Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
}
