<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Creates new form handlers.
 */
final class FormHandlerFactory implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param bool $isDemoModeEnabled
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertiesFormDataPersister $extraPropertiesFormDataPersister
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Contracts\Translation\TranslatorInterface $translator, $isDemoModeEnabled, \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertiesFormDataPersister $extraPropertiesFormDataPersister)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface $dataHandler)
    {
    }
}
