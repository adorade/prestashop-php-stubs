<?php

/**
 * @property ImageType $object
 */
class AdminImagesControllerCore extends \AdminController
{
    protected $start_time = 0;
    protected $max_execution_time = 7200;
    protected $display_move;
    /**
     * @var bool
     */
    protected $canGenerateAvif;
    protected $isMultipleImageFormatFeatureEnabled;
    protected $imageFormatConfiguration;
    public function __construct()
    {
    }
    public function init()
    {
    }
    /**
     * @return void
     *
     * @throws SmartyException
     */
    public function initModal(): void
    {
    }
    public function beforeUpdateOptions()
    {
    }
    public function updateOptionPsImageFormat($value): void
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function postProcess()
    {
    }
    public static function printEntityActiveIcon($value, $object)
    {
    }
    protected function _childValidation()
    {
    }
    /**
     * Init display for the thumbnails regeneration block.
     */
    public function initRegenerate()
    {
    }
    /**
     * Delete resized image then regenerate new one with updated settings.
     *
     * @param string $dir
     * @param array $type
     * @param bool $product
     *
     * @return bool
     */
    protected function _deleteOldImages($dir, $type, $product = \false)
    {
    }
    /**
     * Regenerate images.
     *
     * @param string $dir
     * @param array $type
     * @param bool $productsImages
     *
     * @return bool|string
     */
    protected function _regenerateNewImages($dir, $type, $productsImages = \false)
    {
    }
    /**
     * Regenerate no-pictures images.
     *
     * @param string $dir
     * @param array $type
     * @param array $languages
     *
     * @return bool
     */
    protected function _regenerateNoPictureImages($dir, $type, $languages)
    {
    }
    /* Hook watermark optimization */
    protected function _regenerateWatermark($dir, $type = \null)
    {
    }
    protected function _regenerateThumbnails($type = 'all', $deleteOldImages = \false)
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    /**
     * Move product images to the new filesystem.
     */
    protected function _moveImagesToNewFileSystem()
    {
    }
    public function initContent()
    {
    }
    public function processDelete()
    {
    }
}
