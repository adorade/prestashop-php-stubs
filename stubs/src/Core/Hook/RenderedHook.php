<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Class RenderingHook defines rendered hook.
 */
final class RenderedHook implements \PrestaShop\PrestaShop\Core\Hook\RenderedHookInterface
{
    /**
     * @param HookInterface $hook
     * @param array $content
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookInterface $hook, array $content = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getHook()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function outputContent()
    {
    }
}
