<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Creates new form handlers.
 */
final class FormHandlerFactory implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerFactoryInterface
{
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param TranslatorInterface $translator
     * @param bool $isDemoModeEnabled
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Contracts\Translation\TranslatorInterface $translator, $isDemoModeEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface $dataHandler)
    {
    }
}
