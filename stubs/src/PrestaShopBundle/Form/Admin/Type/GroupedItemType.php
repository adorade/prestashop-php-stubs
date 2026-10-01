<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is the entry type of the GroupedItemCollectionType, it contains the group data
 * (id + name), and the list of items represented with a TaggedItemCollectionType.
 */
class GroupedItemType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
