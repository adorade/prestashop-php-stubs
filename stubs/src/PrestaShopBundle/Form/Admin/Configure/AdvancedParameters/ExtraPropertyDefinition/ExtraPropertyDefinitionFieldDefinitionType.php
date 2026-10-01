<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\ExtraPropertyDefinition;

/**
 * "Field definition" card: structural fields of an extra property definition.
 *
 * entity_name, property_name, type and scope are immutable once created (disabled in edit
 * mode). sql_index, size, nullable and enum_values ARE editable, but only non-destructively —
 * the registry refuses a destructive attempt server-side (ExtraPropertyRegistry::hasStorageChanges()).
 */
class ExtraPropertyDefinitionFieldDefinitionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param list<string> $locales
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $typeChoiceProvider, private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $scopeChoiceProvider, private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $sqlIndexChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
    }
}
