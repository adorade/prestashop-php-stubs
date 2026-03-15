<?php

namespace PrestaShopBundle\Twig;

class TranslationsExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * @var LoggerInterface
     */
    public $logger;
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
    }
    /**
     * Returns concatenated edit translation forms.
     *
     * @param array $translationsTree
     * @param string|null $themeName
     *
     * @return string
     */
    public function getTranslationsForms(array $translationsTree, $themeName = null)
    {
    }
    public function concatenateEditTranslationForm($subtree, $viewProperties)
    {
    }
    /**
     * Returns a tree of translations key values.
     *
     * @param array $translationsTree
     * @param string|null $themeName
     *
     * @return string
     */
    public function getTranslationsTree(array $translationsTree, $themeName = null)
    {
    }
    /**
     * @param array $tree
     * @param int $level
     *
     * @return string
     */
    public function makeSubtree($tree, $level = 3)
    {
    }
    /**
     * @return array
     */
    protected function getSharedEditFormViewProperties()
    {
    }
    /**
     * @param array $properties
     *
     * @return mixed|string
     */
    protected function renderEditTranslationForm($properties)
    {
    }
    protected function getTranslationHash($domain, $translationKey)
    {
    }
    /**
     * @param string $translationKey
     * @param string $domain
     * @param string $locale
     * @param array $translationValue
     *
     * @return array
     */
    protected function getDefaultTranslationValue($translationKey, $domain, $locale, $translationValue)
    {
    }
    /**
     * @param array $translation
     *
     * @return mixed
     */
    protected function getTranslationValue($translation)
    {
    }
    /**
     * @param array $tree
     *
     * @return bool
     */
    protected function hasMessages($tree)
    {
    }
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
    }
    /**
     * @param string $subdomain
     * @param array $subtree
     * @param int $level
     *
     * @return string
     */
    protected function concatenateSubtreeHeader($subdomain, $subtree, $level = 2)
    {
    }
    /**
     * @param array $subtree
     * @param string $output
     *
     * @return string
     */
    protected function getTranslationsFormStart(&$subtree, $output)
    {
    }
    /**
     * @param string $output
     * @param array $subtree
     *
     * @return string
     */
    protected function replaceWarningPlaceholder($output, $subtree)
    {
    }
    /**
     * @param array $subtree
     *
     * @return string
     */
    protected function parseDomain($subtree)
    {
    }
    /**
     * @param mixed $id
     *
     * @return string
     */
    protected function getNavigation($id)
    {
    }
    /**
     * @param string $subject
     * @param bool $isLastChild
     * @param string|null $id
     *
     * @return string
     */
    protected function tagSubject($subject, $isLastChild, $id = null)
    {
    }
}
