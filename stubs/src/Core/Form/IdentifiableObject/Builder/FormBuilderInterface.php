<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder;

/**
 * Defines contract for identifiable object form factories.
 */
interface FormBuilderInterface
{
    /**
     * Create new form.
     *
     * @param array $data
     * @param array $options
     *
     * @return FormInterface
     */
    public function getForm(array $data = [], array $options = []);
    /**
     * Create new form for given object.
     *
     * @param int $id
     * @param array $data
     * @param array $options
     *
     * @return FormInterface
     */
    public function getFormFor($id, array $data = [], array $options = []);
}
