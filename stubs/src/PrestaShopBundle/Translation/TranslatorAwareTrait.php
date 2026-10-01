<?php

namespace PrestaShopBundle\Translation;

/**
 * Trait TranslatorAwareTrait is used for services that depends on translator.
 */
trait TranslatorAwareTrait
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    /**
     * Set translator instance.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
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
