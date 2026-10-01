<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate;

/**
 * MailTemplateTwigRenderer is a basic implementation of MailTemplateRendererInterface
 * using the twig engine.
 */
class MailTemplateTwigRenderer implements \PrestaShop\PrestaShop\Core\MailTemplate\MailTemplateRendererInterface
{
    /**
     * @param \Twig\Environment $twig
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilderInterface $variablesBuilder
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param bool $hasGiftWrapping
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function __construct(\Twig\Environment $twig, \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilderInterface $variablesBuilder, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, bool $hasGiftWrapping)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     *
     * @return string
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function renderHtml(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     *
     * @return string
     */
    public function renderTxt(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addTransformation(\PrestaShop\PrestaShop\Core\MailTemplate\Transformation\TransformationInterface $transformation)
    {
    }
}
