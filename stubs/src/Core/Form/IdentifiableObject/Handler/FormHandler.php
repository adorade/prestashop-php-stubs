<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Handles identifiable object form and delegates form data saving to data handler.
 */
final class FormHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface
{
    /**
     * @param FormDataHandlerInterface $dataHandler
     * @param HookDispatcherInterface $hookDispatcher
     * @param TranslatorInterface $translator
     * @param bool $isDemoModeEnabled
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface $dataHandler, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Contracts\Translation\TranslatorInterface $translator, $isDemoModeEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\Symfony\Component\Form\FormInterface $form)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handleFor($id, \Symfony\Component\Form\FormInterface $form)
    {
    }
}
