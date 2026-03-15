<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Category;

class CategoryTagsCollectionType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * Get the translated chain from key.
     *
     * @param string $key the key to be translated
     * @param string $domain the domain to be selected
     * @param array $parameters Optional, pass parameters if needed (uncommon)
     *
     * @returns string
     */
    protected function trans($key, $domain, $parameters = [])
    {
    }
}
