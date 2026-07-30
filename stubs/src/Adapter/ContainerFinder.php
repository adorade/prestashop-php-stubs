<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Find the container
 */
class ContainerFinder
{
    /**
     * @var Context
     */
    protected $context;
    /**
     * ContainerFinder constructor.
     *
     * @param Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * @return ContainerBuilder|ContainerInterface
     *
     * @throws ContainerNotFoundException
     */
    public function getContainer()
    {
    }
}
