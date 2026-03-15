<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Interface FormChoiceProviderInterface defines contract for choice providers.
 */
interface FormChoiceProviderInterface
{
    /**
     * Get choices.
     *
     * @return array
     */
    public function getChoices();
}
