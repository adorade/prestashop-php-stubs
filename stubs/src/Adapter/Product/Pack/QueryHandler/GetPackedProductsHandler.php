<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\QueryHandler;

/**
 * Handles GetPackedProducts query using legacy object model
 */
class GetPackedProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryHandler\GetPackedProductsHandlerInterface
{
    /**
     * @var int
     */
    protected $languageId;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository
     */
    protected $productPackRepository;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository
     */
    protected $productRepository;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository
     */
    protected $attributeRepository;
    /**
     * @var \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilder
     */
    protected $combinationNameBuilder;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository
     */
    protected $productImageRepository;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    public function __construct(int $defaultLangId, \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $productPackRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilder $combinationNameBuilder, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface $productImageProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Query\GetPackedProducts $query): array
    {
    }
}
