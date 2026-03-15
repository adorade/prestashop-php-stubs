<?php

namespace PrestaShopBundle\Form\Validator\Constraints;

/**
 * The computation here means to only count the raw text, not the rich text with html strip tags, also all the
 * line breaks are simply ignored (not event replaced with spaces). This computation is made to match the one
 * from the TinyMce text count. You can see it in TinyMCEEditor.js component, if the js component is modified
 * so should this validator.
 *
 * Note: if you rely on Product class validation you might also need to update Product::validateField
 * Note: if you are still using the legacy AdminProductsController you should also update the checkProduct() function
 */
class TinyMceMaxLengthValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Validate $validate, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param mixed $value
     * @param TinyMceMaxLength $constraint
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
