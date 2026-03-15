<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CanonicalRedirectTypeChoiceProvider is responsible for providing choices for
 * redirect to the canonical URL form field selection.
 */
final class CanonicalRedirectTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * CanonicalRedirectTypeChoiceProvider constructor.
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
