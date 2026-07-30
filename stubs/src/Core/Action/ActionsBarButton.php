<?php

namespace PrestaShop\PrestaShop\Core\Action;

class ActionsBarButton implements \PrestaShop\PrestaShop\Core\Action\ActionsBarButtonInterface
{
    /**
     * @var string
     */
    protected $class;
    /**
     * @var string[]
     */
    protected $properties;
    /**
     * @var string
     */
    protected $content;
    /**
     * @param string $class
     * @param string[] $properties
     * @param string $content
     */
    public function __construct(string $class = '', array $properties = [], string $content = '')
    {
    }
    /**
     * @return string
     */
    public function getClass(): string
    {
    }
    /**
     * @return string[]
     */
    public function getProperties(): array
    {
    }
    /**
     * @return string
     */
    public function getContent(): string
    {
    }
}
