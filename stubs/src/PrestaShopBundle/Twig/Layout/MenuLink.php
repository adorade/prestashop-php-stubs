<?php

namespace PrestaShopBundle\Twig\Layout;

class MenuLink
{
    public function __construct(public readonly string $name, public readonly string $href = '', public readonly string $icon = '', public readonly array $attributes = [])
    {
    }
}
