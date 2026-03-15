<?php

namespace PrestaShopBundle\Form\Admin\Type\Common\Team;

/**
 * Class ProfileChoiceType is choice type for selecting employee's profile.
 */
class ProfileChoiceType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param array $profileChoices
     */
    public function __construct(array $profileChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
