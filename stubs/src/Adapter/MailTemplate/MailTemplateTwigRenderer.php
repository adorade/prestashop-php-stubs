<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate;

/**
 * MailTemplateTwigRenderer is a basic implementation of MailTemplateRendererInterface
 * using the twig engine.
 */
class MailTemplateTwigRenderer implements \PrestaShop\PrestaShop\Core\MailTemplate\MailTemplateRendererInterface
{
    /**
     * @param Environment $twig
     * @param LayoutVariablesBuilderInterface $variablesBuilder
     * @param HookDispatcherInterface $hookDispatcher
     * @param bool $hasGiftWrapping
     *
     * @throws TypeException
     */
    public function __construct(\Twig\Environment $twig, \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilderInterface $variablesBuilder, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, bool $hasGiftWrapping)
    {
    }
    /**
     * @param LayoutInterface $layout
     * @param LanguageInterface $language
     *
     * @throws TypeException
     *
     * @return string
     *
     * @throws FileNotFoundException
     * @throws TypeException
     */
    public function renderHtml(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
    /**
     * @param LayoutInterface $layout
     * @param LanguageInterface $language
     *
     * @throws FileNotFoundException
     * @throws TypeException
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
