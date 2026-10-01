<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Find the container
 */
class ContainerFinder
{
    /**
     * @var \Context
     */
    protected $context;
    /**
     * ContainerFinder constructor.
     *
     * @param \Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder|\Symfony\Component\DependencyInjection\ContainerInterface
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\ContainerNotFoundException
     */
    public function getContainer()
    {
    }
}
