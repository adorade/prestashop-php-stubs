<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

class ProductPresenter
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected $configuration;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\HookManager
     */
    protected $hookManager;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever
     */
    protected $imageRetriever;
    /**
     * @var \Link
     */
    protected $link;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter
     */
    protected $priceFormatter;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever
     */
    protected $productColorsRetriever;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter, \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever $productColorsRetriever, \Symfony\Contracts\Translation\TranslatorInterface $translator, ?\PrestaShop\PrestaShop\Adapter\HookManager $hookManager = null, ?\PrestaShop\PrestaShop\Adapter\Configuration $configuration = null)
    {
    }
    public function present(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
    {
    }
}
