<?php

namespace PrestaShop\PrestaShop\Core\Util\Number;

/**
 * Extracts numeric value as @var DecimalNumber from given resource
 */
class NumberExtractor
{
    public function __construct(\Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor)
    {
    }
    /**
     * If provided resource is array, access its values using brackets e.g. '[one_property][another_level_property]'
     * If provided resource is object, access its properties using dots e.g. 'myProperty.anotherProperty'
     * You can also simply provide the name of property/key to reach the value if it is not multidimensional.
     *
     * object's public property will be extracted first,
     * else it will search for getters.
     * Note: this will only work when providing exact property name,
     * but not path selector for inner objects
     *
     * e.g:
     * ->extract($myMultiDimensionalArray, '[firstDimensionKey][secondDimensionKey]')
     *
     * ->extract($productForEditing, 'priceInformation.price')
     *
     * ->extract($productEntity, 'price')
     *
     * ->extract($simpleArray, '[someKey]')
     *
     * @param array|object $resource
     * @param string $propertyPath
     *
     * @return DecimalNumber
     *
     * @throws NumberExtractorException
     */
    public function extract($resource, string $propertyPath): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
