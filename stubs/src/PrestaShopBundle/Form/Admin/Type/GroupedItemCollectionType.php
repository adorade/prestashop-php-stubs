<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type handles a selection of grouped values (ex: AttributeGroup and their
 * Attributes, Feature and their FeatureValue)
 *
 * The form type includes two imbricated collection, each group is rendered via an input
 * composed of tags that represent their values, the tags are removable from the input directly.
 *
 * To select the grouped items you can click on the associated button which open a modal handled
 * by a Vue app that allows selecting in groups, toggle all the values of a group and a search input
 * for all non-selected values.
 *
 * The form type expects an array of groups with their ID and name (even if they may not always be necessary
 * while saving the data), and a sub-array containing the item values with their name and ID:
 *
 *  $groupedItemData = [
 *      2 => [
 *          'id' => 2,
 *          'name' => 'Color',
 *          'items' => [
 *              'id' => 10,
 *              'name' => 'Red',
 *          ],
 *          [
 *              'id' => 11,
 *              'name' => 'Black',
 *          ],
 *      ],
 *      3 => [
 *          'id' => 3,
 *          'name' => 'Dimension',
 *          'items' => [
 *              'id' => 19,
 *              'name' => '40x60cm',
 *          ],
 *          [
 *              'id' => 21,
 *              'name' => '80x120cm',
 *          ],
 *      ],
 *  ];
 */
class GroupedItemCollectionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
