<?php

namespace PrestaShopBundle\ApiPlatform\Resources;

#[\ApiPlatform\Metadata\ApiResource(operations: [new \PrestaShopBundle\ApiPlatform\Metadata\PaginatedList(uriTemplate: '/languages', ApiResourceMapping: ['[id_lang]' => '[langId]', '[iso_code]' => '[isoCode]', '[language_code]' => '[languageCode]', '[date_format_lite]' => '[dateFormat]', '[date_format_full]' => '[dateTimeFormat]', '[is_rtl]' => '[rtl]', '[active]' => '[enabled]'], gridDataFactory: 'prestashop.core.grid.factory.language_decorator', filtersMapping: ['[langId]' => '[id_lang]', '[isoCode]' => '[iso_code]', '[languageCode]' => '[language_code]', '[dateFormat]' => '[date_format_lite]', '[dateTimeFormat]' => '[date_format_full]', '[rtl]' => '[is_rtl]', '[enabled]' => '[active]'])])]
class Language
{
    #[\ApiPlatform\Metadata\ApiProperty(identifier: true)]
    public int $langId;
    public string $name;
    public string $isoCode;
    public string $languageCode;
    public string $locale;
    public string $dateFormat;
    public string $dateTimeFormat;
    public bool $rtl;
    public bool $enabled;
    public string $flag;
}
