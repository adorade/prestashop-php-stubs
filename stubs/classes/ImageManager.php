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
 * Class ImageManagerCore.
 *
 * This class includes functions for image manipulation
 *
 * @since 1.5.0
 */
class ImageManagerCore
{
    public const ERROR_FILE_NOT_EXIST = 1;
    public const ERROR_FILE_WIDTH = 2;
    public const ERROR_MEMORY_LIMIT = 3;
    public const MIME_TYPE_SUPPORTED = ['image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/webp', 'image/svg+xml', 'image/svg'];
    public const EXTENSIONS_SUPPORTED = ['gif', 'jpg', 'jpeg', 'jpe', 'png', 'webp'];
    /**
     * @var array - a list of svg mime types
     */
    protected const SVG_MIMETYPES = ['image/svg+xml', 'image/svg'];
    /**
     * Generate a cached thumbnail for object lists (eg. carrier, order statuses...etc).
     *
     * @param string $image Real image filename
     * @param string $cacheImage Cached filename
     * @param int $size Desired size
     * @param string $imageType Image type
     * @param bool $disableCache When turned on a timestamp will be added to the image URI to disable the HTTP cache
     * @param bool $regenerate When turned on and the file already exist, the file will be regenerated
     *
     * @return string|bool
     */
    public static function thumbnail($image, $cacheImage, $size, $imageType = 'jpg', $disableCache = \true, $regenerate = \false)
    {
    }
    /**
     * @param string $cacheImage
     * @param bool $disableCache
     *
     * @return string
     */
    public static function getThumbnailPath($cacheImage, $disableCache)
    {
    }
    /**
     * Check if memory limit is too long or not.
     *
     * @param string $image
     *
     * @return bool
     */
    public static function checkImageMemoryLimit($image)
    {
    }
    /**
     * Resize, cut and optimize image.
     *
     * @param string $sourceFile Image object from $_FILE
     * @param string $destinationFile Destination filename
     * @param int $destinationWidth Desired width (optional)
     * @param int $destinationHeight Desired height (optional)
     * @param string $destinationFileType Desired file_type (may be override by PS_IMAGE_QUALITY)
     * @param bool $forceType Don't override $file_type by PS_IMAGE_QUALITY, used when generating webp and avif files
     * @param int $error Out error code
     * @param int $targetWidth Needed by AdminImportController to speed up the import process
     * @param int $targetHeight Needed by AdminImportController to speed up the import process
     * @param int $quality Needed by AdminImportController to speed up the import process
     * @param int $sourceWidth Needed by AdminImportController to speed up the import process
     * @param int $sourceHeight Needed by AdminImportController to speed up the import process
     *
     *@return bool Operation result
     */
    public static function resize($sourceFile, $destinationFile, $destinationWidth = \null, $destinationHeight = \null, $destinationFileType = 'jpg', $forceType = \false, &$error = 0, &$targetWidth = \null, &$targetHeight = \null, $quality = 5, &$sourceWidth = \null, &$sourceHeight = \null)
    {
    }
    /**
     * @param resource|GdImage $dstImage
     * @param resource|GdImage $srcImage
     * @param int $dstX
     * @param int $dstY
     * @param int $srcX
     * @param int $srcY
     * @param int $dstW
     * @param int $dstH
     * @param int $srcW
     * @param int $srcH
     * @param int $quality
     *
     * @return bool
     */
    public static function imagecopyresampled(
        // @phpstan-ignore-next-line
        &$dstImage,
        // @phpstan-ignore-next-line
        $srcImage,
        $dstX,
        $dstY,
        $srcX,
        $srcY,
        $dstW,
        $dstH,
        $srcW,
        $srcH,
        $quality = 3
    )
    {
    }
    /**
     * @param string $filename
     *
     * @return string|bool
     */
    public static function getMimeType(string $filename)
    {
    }
    /**
     * Check if file is a real image.
     *
     * @param string $filename File path to check
     * @param string $fileMimeType File known mime type (generally from $_FILES)
     * @param array<string>|null $mimeTypeList Allowed MIME types
     *
     * @return bool
     */
    public static function isRealImage($filename, $fileMimeType = \null, $mimeTypeList = \null)
    {
    }
    /**
     * Check if image file extension is correct.
     *
     * @param string $filename Real filename
     * @param array<string>|null $authorizedExtensions
     *
     * @return bool True if it's correct
     */
    public static function isCorrectImageFileExt($filename, $authorizedExtensions = \null)
    {
    }
    /**
     * Validate image upload (check image type and weight).
     *
     * @param array $file Upload $_FILE value
     * @param int $maxFileSize Maximum upload size
     * @param array<string>|null $types Authorized extensions
     * @param array<string>|null $mimeTypeList Authorized mimetypes
     *
     * @return bool|string Return false if no error encountered
     */
    public static function validateUpload($file, $maxFileSize = 0, $types = \null, $mimeTypeList = \null)
    {
    }
    /**
     * Validate icon upload.
     *
     * @param array $file Upload $_FILE value
     * @param int $maxFileSize Maximum upload size
     *
     * @return bool|string Return false if no error encountered
     */
    public static function validateIconUpload($file, $maxFileSize = 0)
    {
    }
    /**
     * Cut image.
     *
     * @param string $srcFile Origin filename
     * @param string $dstFile Destination filename
     * @param int $dstWidth Desired width
     * @param int $dstHeight Desired height
     * @param string $fileType
     * @param int $dstX
     * @param int $dstY
     *
     * @return bool Operation result
     */
    public static function cut($srcFile, $dstFile, $dstWidth = \null, $dstHeight = \null, $fileType = 'jpg', $dstX = 0, $dstY = 0)
    {
    }
    /**
     * Create an image with GD extension from a given type.
     *
     * @param string $type
     * @param string $filename
     *
     * @return false|resource
     */
    public static function create($type, $filename)
    {
    }
    /**
     * Create an empty image with white background.
     *
     * @param int $width
     * @param int $height
     *
     * @phpstan-ignore-next-line
     *
     * @return resource|GdImage
     */
    public static function createWhiteImage($width, $height)
    {
    }
    /**
     * Generate and write image.
     *
     * @param string $type
     * @param resource $resource
     * @param string $filename
     *
     * @return bool
     */
    public static function write($type, $resource, $filename)
    {
    }
    /**
     * Return the mime type by the file extension.
     *
     * @param string $fileName
     *
     * @return string
     */
    public static function getMimeTypeByExtension($fileName)
    {
    }
    public static function isSvgMimeType(string $mimeType): bool
    {
    }
    /**
     * copyImg copy an image located in $url and save it in a path
     * according to $entity->$id_entity .
     * $id_image is used if we need to add a watermark.
     *
     * @param int $id_entity id of product or category (set in entity)
     * @param int $id_image (default null) id of the image if watermark enabled
     * @param string $url path or url to use
     * @param string $entity 'products' or 'categories'
     * @param bool $regenerate
     *
     * @return bool
     */
    public static function copyImg($id_entity, $id_image = \null, $url = '', $entity = 'products', $regenerate = \true)
    {
    }
    public static function get_best_path($tgt_width, $tgt_height, $path_infos)
    {
    }
}
