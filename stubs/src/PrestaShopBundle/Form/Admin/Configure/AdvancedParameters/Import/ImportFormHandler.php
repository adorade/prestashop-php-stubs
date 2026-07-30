<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Class ImportFormHandler defines a form handler of import forms.
 */
class ImportFormHandler implements \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormHandlerInterface
{
    /**
     * @param FormBuilderInterface $formBuilder
     * @param HookDispatcherInterface $hookDispatcher
     * @param ImportFormDataProviderInterface $formDataProvider
     * @param string $hookName
     */
    public function __construct(\Symfony\Component\Form\FormBuilderInterface $formBuilder, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormDataProviderInterface $formDataProvider, $hookName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getForm(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
}
