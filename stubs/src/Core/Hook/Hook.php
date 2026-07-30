<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Class Hook defines hook.
 */
final class Hook implements \PrestaShop\PrestaShop\Core\Hook\HookInterface
{
    /**
     * @param string $name
     * @param array $parameters
     */
    public function __construct($name, array $parameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParameters()
    {
    }
}
