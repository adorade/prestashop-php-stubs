<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Tax;

/**
 * Form type for creating/editing a tax rule within a tax rules group
 */
class TaxRuleType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $taxByIdChoiceProvider, private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix)
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
     * Validates the zip code against the selected country's format.
     *
     * @param array $data form data
     * @param \Symfony\Component\Validator\Context\ExecutionContextInterface $context
     */
    public function validateZipCode(array $data, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
    {
    }
}
