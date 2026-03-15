<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Employee;

/**
 * Class EmployeeType defines an employee form.
 */
final class EmployeeType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param array $languagesChoices
     * @param array $tabChoices
     * @param array $profilesChoices
     * @param bool $isMultistoreFeatureActive
     * @param ConfigurationInterface $configuration
     * @param int $superAdminProfileId
     * @param Router $router
     */
    public function __construct(array $languagesChoices, array $tabChoices, array $profilesChoices, bool $isMultistoreFeatureActive, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, int $superAdminProfileId, \PrestaShopBundle\Service\Routing\Router $router)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
