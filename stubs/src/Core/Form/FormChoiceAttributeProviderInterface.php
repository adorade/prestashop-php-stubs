<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Interface FormChoiceProviderInterface defines contract for choice attribute providers.
 */
interface FormChoiceAttributeProviderInterface
{
    /**
     * Get choices attributes.
     *  return [{choice_value} => [...$attributes]]
     *
     * @return array
     */
    public function getChoicesAttributes();
}
