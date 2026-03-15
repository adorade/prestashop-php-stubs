<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

class ProductPresenter
{
    /**
     * @var Configuration
     */
    protected $configuration;
    /**
     * @var HookManager
     */
    protected $hookManager;
    /**
     * @var ImageRetriever
     */
    protected $imageRetriever;
    /**
     * @var Link
     */
    protected $link;
    /**
     * @var PriceFormatter
     */
    protected $priceFormatter;
    /**
     * @var ProductColorsRetriever
     */
    protected $productColorsRetriever;
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter, \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever $productColorsRetriever, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager = null, \PrestaShop\PrestaShop\Adapter\Configuration $configuration = null)
    {
    }
    public function present(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
    {
    }
}
