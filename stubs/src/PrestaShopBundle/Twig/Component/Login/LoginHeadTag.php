<?php

namespace PrestaShopBundle\Twig\Component\Login;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig')]
class LoginHeadTag extends \PrestaShopBundle\Twig\Component\HeadTag
{
    public function mount(string $metaTitle = ''): void
    {
    }
}
