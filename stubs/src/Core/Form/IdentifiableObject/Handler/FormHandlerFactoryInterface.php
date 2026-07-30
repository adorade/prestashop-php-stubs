<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Defines interface for form handler factories.
 */
interface FormHandlerFactoryInterface
{
    /**
     * Creates new form handler with given data handler.
     *
     * @param FormDataHandlerInterface $dataHandler
     *
     * @return FormHandlerInterface
     */
    public function create(\PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface $dataHandler);
}
