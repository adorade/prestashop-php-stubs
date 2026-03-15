<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder;

/**
 * Creates new form builders which are used to get forms for identifiable objects.
 */
final class FormBuilderFactory implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderFactoryInterface
{
    /**
     * @param FormFactoryInterface $formFactory
     * @param HookDispatcherInterface $hookDispatcher
     * @param FormRegistryInterface $registry
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Component\Form\FormRegistryInterface $registry)
    {
    }
    /**
     * @param string $formType
     * @param FormDataProviderInterface $dataProvider
     * @param FormOptionsProviderInterface|null $optionProvider
     *
     * @return FormBuilder
     */
    public function create($formType, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface $dataProvider, ?\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider\FormOptionsProviderInterface $optionProvider = null)
    {
    }
}
