<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder;

/**
 * Creates new forms for identifiable objects.
 */
final class FormBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface
{
    /**
     * @param FormFactoryInterface $formFactory
     * @param HookDispatcherInterface $hookDispatcher
     * @param FormDataProviderInterface $dataProvider
     * @param string $formType
     * @param FormRegistryInterface $registry
     * @param FormOptionsProviderInterface|null $optionsProvider
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface $dataProvider, string $formType, \Symfony\Component\Form\FormRegistryInterface $registry, ?\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider\FormOptionsProviderInterface $optionsProvider = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getForm(array $data = [], array $options = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFormFor($id, array $data = [], array $options = [])
    {
    }
}
