<?php

namespace PrestaShop\PrestaShop\Adapter\Tag\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetTagForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Tag\QueryHandler\GetTagForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Query\GetTagForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Tag\QueryResult\EditableTag
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId $tagId
     *
     * @return \Tag
     */
    protected function getLegacyTagObject(\PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId $tagId): \Tag
    {
    }
    /**
     * @return array{id: int, name: string, image: string}
     */
    protected function getTagProduct(array $product): array
    {
    }
}
