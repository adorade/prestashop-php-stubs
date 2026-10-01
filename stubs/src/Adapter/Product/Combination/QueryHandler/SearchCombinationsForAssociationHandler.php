<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class SearchCombinationsForAssociationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\SearchCombinationsForAssociationHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository
     */
    protected $attributeRepository;
    /**
     * @var \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface
     */
    protected $combinationNameBuilder;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
     * @param \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchCombinationsForAssociation $query): array
    {
    }
    /**
     * @param array $foundCombination
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForAssociation
     */
    protected function createResult(array $foundCombination, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForAssociation
    {
    }
    protected function buildName(string $productName, int $combinationId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): string
    {
    }
}
