<?php

namespace PrestaShopBundle\Form\Admin\Login;

class LoginFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(private readonly \Symfony\Component\Security\Http\Authentication\AuthenticationUtils $authenticationUtils)
    {
    }
    public function getData()
    {
    }
    public function setData(array $data)
    {
    }
}
