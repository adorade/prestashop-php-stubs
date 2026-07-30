<?php

namespace PrestaShop\PrestaShop\Core\Routing;

/**
 * Class EntityLinkBuilderFactory is able to return the builder for an entity.
 */
class EntityLinkBuilderFactory
{
    /**
     * @param array $builders
     */
    public function __construct(array $builders)
    {
    }
    /**
     * @param string $entity
     *
     * @return EntityLinkBuilderInterface
     *
     * @throws BuilderNotFoundException
     */
    public function getBuilderFor($entity)
    {
    }
}
