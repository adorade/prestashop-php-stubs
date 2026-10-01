<?php

namespace PrestaShopBundle\Twig;

final class RawPurifiedExtension extends \Twig\Extension\AbstractExtension
{
    public function __construct(private readonly \PrestaShopBundle\Utils\HTMLPurifier $htmlPurifier)
    {
    }
    /**
     * Defines available filters.
     *
     * @return array Twig_SimpleFilter
     */
    public function getFilters(): array
    {
    }
    public function rawPurifier(string $toPurify): string
    {
    }
    public function getName(): string
    {
    }
}
