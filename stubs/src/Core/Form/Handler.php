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
     * @var \Symfony\Component\Form\FormFactoryInterface the form factory
     */
    protected $formFactory;
    /**
     * @var FormDataProviderInterface the form data provider
     */
    protected $formDataProvider;
    /**
     * @var \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface the event dispatcher
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
     * @param \Symfony\Component\Form\FormFactoryInterface $formFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
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
     * @throws \Exception
     */
    public function getForm()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     * @throws \Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
     */
    public function save(array $data)
    {
    }
}
