<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Validates the formType/formOptions pair of an extra property definition by building a
 * throwaway form with the EXACT type and merged options ExtraPropertiesFormBuilderModifier
 * will use at render time (see resolveFieldTypeAndOptions()), so an accepted definition is
 * guaranteed to build later and a refused one fails at save time instead of breaking the
 * target back-office form.
 *
 * Runtime-only option values injected by the modifier (label, help) are replaced by dummy
 * strings: they never influence option resolution.
 */
class FormOptionsValidator
{
    public function __construct(private readonly \Symfony\Component\Form\FormFactoryInterface $formFactory, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Form\ExtraPropertyFormTypeMap $formTypeMap)
    {
    }
    /**
     * @param string|null $formTypeFqcn Explicit form type override declared by the definition (null = mapped default)
     * @param list<string>|null $enumValues ENUM literals of a CHOICE definition (null for other types)
     * @param array<string, mixed>|null $formOptions Extra options merged into the form type options
     *
     * @return list<string> human-readable errors; empty when the form field can be built
     */
    public function validate(?string $formTypeFqcn, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type, ?array $enumValues, \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyScope $scope, ?array $formOptions): array
    {
    }
}
