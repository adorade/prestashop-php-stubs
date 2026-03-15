<?php

namespace PrestaShopBundle\Translation;

/**
 * Trait TranslatorAwareTrait is used for services that depends on translator.
 */
trait TranslatorAwareTrait
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    /**
     * Set translator instance.
     *
     * @param TranslatorInterface $translator
     */
    public function setTranslator(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Shortcut method to translate text.
     *
     * @param string $id
     * @param array $options
     * @param string $domain
     *
     * @return string
     */
    protected function trans($id, array $options, $domain)
    {
    }
}
