<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Manage Symfony forms outside the controllers.
 */
interface FormHandlerInterface
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function getForm();
    /**
     * Describe what need to be done on saving the form: mostly persists the data
     * using a form data provider, but it's also the right place to dispatch events/log something.
     *
     * @param array $data data retrieved from form that need to be persisted in database
     *
     * @return array $errors if data can't persisted an array of errors messages
     *
     * @throws \Exception if the data can't be handled
     */
    public function save(array $data);
}
