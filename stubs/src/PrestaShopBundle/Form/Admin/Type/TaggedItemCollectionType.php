<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type contains a list of elements represented in an input containing
 * tags. Each value is represented in the tag via its name an is associated its ID
 * value:
 *
 *  $taggedItems = [
 *      [
 *          'id' => 1,
 *          'name' => 'S',
 *      ],
 *      [
 *          'id' => 2,
 *          'name' => 'M',
 *      ],
 *  ];
 */
class TaggedItemCollectionType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
