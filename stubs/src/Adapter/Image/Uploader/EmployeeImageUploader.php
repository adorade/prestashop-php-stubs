<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Uploads employee logo image
 */
final class EmployeeImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * @param string $employeeImageDir
     * @param string $tmpImageDir
     */
    public function __construct(string $employeeImageDir = _PS_EMPLOYEE_IMG_DIR_, string $tmpImageDir = _PS_TMP_IMG_DIR_)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function upload($employeeId, \Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
}
