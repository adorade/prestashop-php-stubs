<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Complete implementation of FormHandlerInterface.
 */
class Handler implements \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
{
    /**
     * @var string
     */
    public $form;
    /**
     * @var FormFactoryInterface the form factory
     */
    protected $formFactory;
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
     * @var string the form name
     */
    protected $formName;
    /**
     * FormHandler constructor.
     *
     * @param FormFactoryInterface $formFactory
     * @param HookDispatcherInterface $hookDispatcher
     * @param FormDataProviderInterface $formDataProvider
     * @param string $form
     * @param string $hookName
     * @param string $formName
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface $formDataProvider, string $form, $hookName, $formName = 'form')
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
