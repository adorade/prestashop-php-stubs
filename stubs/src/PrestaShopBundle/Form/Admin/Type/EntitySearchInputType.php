<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used for a OneToMany (or ManyToMany) association, it allows to search a list of entities
 * (based on a remote url) and associate it. It is based on the CollectionType form type which provides prototype
 * features to display a custom template for each associated items.
 *
 * A default entry type is provided with this form type @see EntityItemType which is composed of three inputs:
 *   - id
 *   - name
 *   - image
 *
 * Thus matches the default mapping of this form type via prototype_mapping, but you can change this entry type
 * to change the included data, the rendering and/or the mapping. In front the EntitySearchInput js component
 * will automatically adapt to the new mapping.
 */
class EntitySearchInputType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    public const LIST_LAYOUT = 'list';
    public const TABLE_LAYOUT = 'table';
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
    /**
     * @param string $key
     * @param string $domain
     * @param array $parameters
     *
     * @return string
     */
    protected function trans(string $key, string $domain, array $parameters = []): string
    {
    }
}
