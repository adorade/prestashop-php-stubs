<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class SearchProductsForFreeGiftHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\SearchProductsForFreeGiftHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private readonly \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForFreeGift $query): array
    {
    }
}
