<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Transformation;

/**
 * Class AbstractTransformation is a basic abstract class for TransformationInterface
 */
abstract class AbstractTransformation implements \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\TransformationInterface
{
    /** @var \PrestaShop\PrestaShop\Core\Language\LanguageInterface */
    protected $language;
    /** @var string */
    protected $type;
    /**
     * @param string $type
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    public function __construct($type)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLanguage(\PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
}
