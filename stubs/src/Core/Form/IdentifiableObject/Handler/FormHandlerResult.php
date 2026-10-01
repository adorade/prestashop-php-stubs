<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler;

/**
 * Stores results for handling forms.
 */
class FormHandlerResult implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerResultInterface
{
    /**
     * Creates successful form handler result with identifiable object id.
     *
     * @param int $identifiableObjectId
     *
     * @return FormHandlerResult
     */
    public static function createWithId($identifiableObjectId)
    {
    }
    /**
     * Creates form handler result when form which was provided form handling was not submitted
     *
     * @return FormHandlerResult
     */
    public static function createNotSubmitted()
    {
    }
    /**
     * Creates result for submitted but not valid form
     *
     * @return FormHandlerResult
     */
    public static function createSubmittedButNotValid()
    {
    }
    /**
     * @return bool
     */
    public function isValid()
    {
    }
    /**
     * @return bool
     */
    public function isSubmitted()
    {
    }
    /**
     * @return int|null
     */
    public function getIdentifiableObjectId()
    {
    }
}
