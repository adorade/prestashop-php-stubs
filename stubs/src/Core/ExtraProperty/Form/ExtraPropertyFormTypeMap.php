<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Maps a logical extra property type to the Symfony form type (and base options) used to render
 * it in back-office forms when the definition does not declare an explicit formType.
 *
 * The definition's formOptions are merged OVER the base options returned here, so a definition
 * can refine the defaults (e.g. change the NumberType scale) without replacing the whole type.
 */
class ExtraPropertyFormTypeMap
{
    /**
     * @param list<string>|null $enumValues ENUM literals of a CHOICE definition (null for other types)
     *
     * @return array{0: class-string<\Symfony\Component\Form\FormTypeInterface>, 1: array<string, mixed>}
     */
    public function getDefaultFor(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyType $type, ?array $enumValues = null): array
    {
    }
    /**
     * Type value => form type FQCN, e.g. for displaying the effective default next to the
     * "Symfony form type" override field of the definition form.
     *
     * @return array<string, class-string<\Symfony\Component\Form\FormTypeInterface>>
     */
    public function getMap(): array
    {
    }
}
