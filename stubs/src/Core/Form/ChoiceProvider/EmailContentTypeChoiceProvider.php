<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class EmailContentTypeChoiceProvider provides email content type choices.
 */
final class EmailContentTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Get email content type choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
