<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class WebserviceSpecificManagementImagesCore implements \WebserviceSpecificManagementInterface
{
    /** @var WebserviceOutputBuilder */
    protected $objOutput;
    /** @var string */
    protected $output;
    /** @var WebserviceRequest */
    protected $wsObject;
    /**
     * @var string The extension of the image to display
     */
    protected $imgExtension;
    /**
     * @var array The type of images (general, categories, manufacturers, suppliers, stores...)
     */
    protected $imageTypes = ['general' => ['header' => [], 'mail' => [], 'invoice' => [], 'store_icon' => []], 'products' => [], 'categories' => [], 'manufacturers' => [], 'suppliers' => [], 'stores' => [], 'customizations' => []];
    /**
     * @var string The image type (product, category, general,...)
     */
    protected $imageType = \null;
    /**
     * @var array The list of supported mime types
     */
    protected $acceptedImgMimeTypes = ['image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/webp', 'image/x-png'];
    /**
     * @var string The product image combination id
     */
    protected $productImageDeclinationId = \null;
    /**
     * @var bool If the current image management has to manage a "default" image (i.e. "No product available")
     */
    protected $defaultImage = \false;
    /**
     * @var string The file path of the image to display. If not null, the image will be displayed, even if the XML output was not empty
     */
    public $imgToDisplay = \null;
    public $imageResource = \null;
    /* ------------------------------------------------
     * GETTERS & SETTERS
     * ------------------------------------------------ */
    /**
     * @param WebserviceOutputBuilder $obj
     *
     * @return WebserviceSpecificManagementInterface
     */
    public function setObjectOutput(\WebserviceOutputBuilder $obj)
    {
    }
    public function getObjectOutput()
    {
    }
    public function setWsObject(\WebserviceRequest $obj)
    {
    }
    public function getWsObject()
    {
    }
    /**
     * This method need $this->imgToDisplay to be set if output don't needs to be XML
     *
     * @return string
     */
    public function getContent()
    {
    }
    public function manage()
    {
    }
    /**
     * Management of images URL segment.
     *
     * @return bool
     *
     * @throws WebserviceException
     */
    protected function manageImages()
    {
    }
    /**
     * Management of general images.
     *
     * @return bool|void
     *
     * @throws WebserviceException
     */
    protected function manageGeneralImages()
    {
    }
    protected function manageDefaultDeclinatedImages($directory, $normal_image_sizes)
    {
    }
    protected function manageListDeclinatedImages($directory, $normal_image_sizes)
    {
    }
    protected function manageEntityDeclinatedImages($directory, $normal_image_sizes)
    {
    }
    /**
     * Management of normal images (as categories, suppliers, manufacturers and stores).
     *
     * @param string $directory the file path of the root of the images folder type
     *
     * @return bool
     */
    protected function manageDeclinatedImages($directory)
    {
    }
    protected function manageProductImages()
    {
    }
    protected function getCustomizations()
    {
    }
    protected function manageCustomizationImages()
    {
    }
    /**
     * Management of normal images CRUD.
     *
     * @param bool $filename_exists if the filename exists
     * @param string $filename the image path
     * @param array $image_sizes The
     * @param string $directory
     *
     * @return bool|void
     *
     * @throws WebserviceException
     */
    protected function manageDeclinatedImagesCRUD($filename_exists, $filename, $image_sizes, $directory)
    {
    }
    /**
     * Delete the image on disk.
     *
     * @param string $file_path the image file path
     * @param array $image_types The different sizes
     * @param string $parent_path The parent path
     *
     * @return bool
     */
    protected function deleteImageOnDisk($file_path, $image_types = \null, $parent_path = \null)
    {
    }
    /**
     * Write the image on disk.
     *
     * @param string $base_path
     * @param string $new_path
     * @param int $dest_width
     * @param int $dest_height
     * @param array $image_types
     * @param string $parent_path
     *
     * @return string
     *
     * @throws WebserviceException
     */
    protected function writeImageOnDisk($base_path, $new_path, $dest_width = \null, $dest_height = \null, $image_types = \null, $parent_path = \null)
    {
    }
    /**
     * Write the posted image on disk.
     *
     * @param string $reception_path
     * @param int $dest_width
     * @param int $dest_height
     * @param array $image_types
     * @param string $parent_path
     *
     * @return bool|string
     *
     * @throws WebserviceException
     */
    protected function writePostedImageOnDisk($reception_path, $dest_width = \null, $dest_height = \null, $image_types = \null, $parent_path = \null)
    {
    }
}
