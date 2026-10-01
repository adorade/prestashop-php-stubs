<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class DiscountFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private readonly \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, private readonly \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilder $combinationNameBuilder, private readonly \PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface $productImageProvider, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, private readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository)
    {
    }
    public function getDefaultData()
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationConstraintException
     */
    public function getData($id)
    {
    }
}
