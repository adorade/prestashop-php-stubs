<?php

namespace PrestaShop\PrestaShop\Adapter\Title;

class AbstractTitleHandler
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository
     */
    protected $titleRepository;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader
     */
    protected $titleImageUploader;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository $titleRepository
     * @param \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader $titleImageUploader
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository $titleRepository, \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader $titleImageUploader)
    {
    }
}
