<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Interface for services that provide configurable form choices (e.g. States choices depending on country).
 */
interface ConfigurableFormChoiceProviderInterface
{
    /**
     * @param array $options
     *
     * @return array
     */
    public function getChoices(array $options);
}
