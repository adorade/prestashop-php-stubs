<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Class FilterFormFactory is responsible for creating grid filter form.
 */
final class GridFilterFormFactory implements \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface
{
    /**
     * @param \Symfony\Component\Form\FormFactoryInterface $formFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface|null $hookDispatcher
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface $definition)
    {
    }
}
