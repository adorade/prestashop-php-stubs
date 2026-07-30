<?php

namespace PrestaShop\PrestaShop\Adapter\Routing;

/**
 * Class LegacyHelperLinkBuilder is able to build entity links "manually" by concatenating
 * the parameters to the current index. This way of building links is deprecated and should
 * be replaced with Symfony router or Link::getAdminLink
 */
class LegacyHelperLinkBuilder implements \PrestaShop\PrestaShop\Core\Routing\EntityLinkBuilderInterface
{
    /**
     * @param string $entity
     * @param array $parameters
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public function getViewLink($entity, array $parameters)
    {
    }
    /**
     * @param string $entity
     * @param array $parameters
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public function getEditLink($entity, array $parameters)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canBuild($entity)
    {
    }
}
