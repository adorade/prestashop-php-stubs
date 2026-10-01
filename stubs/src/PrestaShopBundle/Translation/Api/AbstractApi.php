<?php

namespace PrestaShopBundle\Translation\Api;

abstract class AbstractApi
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    public function setTranslator(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function getFormattedTranslations()
    {
    }
    abstract public function getTranslations();
}
