<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Complete implementation of FormHandlerInterface.
 *
 * @deprecated since 1.7.8, will be removed in the next major version, use Handler.php instead
 */
class FormHandler implements \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
{
    /**
     * @var FormBuilderInterface the form builder
     */
    protected $formBuilder;
    /**
     * @var FormDataProviderInterface the form data provider
     */
    protected $formDataProvider;
    /**
     * @var HookDispatcherInterface the event dispatcher
     */
    protected $hookDispatcher;
    /**
     * @var string the hook name
     */
    protected $hookName;
    /**
     * @var array the list of Form Types
     */
    protected $formTypes;
    /**
     * @var string the form name
     */
    protected $formName;
    /**
     * FormHandler constructor.
     *
     * @param FormBuilderInterface $formBuilder
     * @param HookDispatcherInterface $hookDispatcher
     * @param FormDataProviderInterface $formDataProvider
     * @param array $formTypes
     * @param string $hookName
     * @param string $formName
     */
    public function __construct(\Symfony\Component\Form\FormBuilderInterface $formBuilder, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface $formDataProvider, array $formTypes, $hookName, $formName = 'form')
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function getForm()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws Exception
     * @throws UndefinedOptionsException
     */
    public function save(array $data)
    {
    }
}
