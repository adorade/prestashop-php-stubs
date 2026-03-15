<?php

namespace PrestaShopBundle\Form;

/**
 * This class is used to clone a form field, it is interesting when you need to change an option
 * of a form already created. Since the options are immutable once the form is built the solution
 * is to rebuild it while overriding its option and then add it again to the parent form to replace
 * the previous one.
 */
class FormCloner
{
    /**
     * @param FormInterface $form
     * @param array $options
     *
     * @return FormInterface
     */
    public function cloneForm(\Symfony\Component\Form\FormInterface $form, array $options = []): \Symfony\Component\Form\FormInterface
    {
    }
}
