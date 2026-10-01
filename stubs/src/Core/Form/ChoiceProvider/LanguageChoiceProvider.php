<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class LanguageChoiceProvider provides languages choices with ID values.
 *
 * @todo this class could be merged with \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\LanguageByIdChoiceProvider
 *       as this class can fully achieve the same behavior as the LanguageByIdChoiceProvider.
 *       It would break BC though, so couldn't be done at the moment.
 */
final class LanguageChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param array $languages
     */
    public function __construct(array $languages)
    {
    }
    /**
     * Get active language choices for form.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
