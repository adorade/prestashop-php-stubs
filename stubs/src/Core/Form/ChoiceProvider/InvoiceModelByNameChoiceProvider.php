<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class InvoiceModelByNameChoiceProvider provides invoice model choices with name values.
 */
final class InvoiceModelByNameChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param FileFinderInterface $invoiceModelFinder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\File\FileFinderInterface $invoiceModelFinder)
    {
    }
    /**
     * Get invoice model choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
