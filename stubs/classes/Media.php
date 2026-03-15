<?php

/**
 * Class MediaCore.
 */
class MediaCore
{
    public static $jquery_ui_dependencies = ['ui.core' => ['fileName' => 'jquery.ui.core.min.js', 'dependencies' => [], 'theme' => \true], 'ui.widget' => ['fileName' => 'jquery.ui.widget.min.js', 'dependencies' => [], 'theme' => \false], 'ui.mouse' => ['fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => \false], 'ui.position' => ['fileName' => 'jquery.ui.position.min.js', 'dependencies' => [], 'theme' => \false], 'ui.draggable' => ['fileName' => 'jquery.ui.draggable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => \false], 'ui.droppable' => ['fileName' => 'jquery.ui.droppable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse', 'ui.draggable'], 'theme' => \false], 'ui.resizable' => ['fileName' => 'jquery.ui.resizable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => \true], 'ui.selectable' => ['fileName' => 'jquery.ui.selectable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => \true], 'ui.sortable' => ['fileName' => 'jquery.ui.sortable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => \true], 'ui.autocomplete' => ['fileName' => 'jquery.ui.autocomplete.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'ui.menu'], 'theme' => \true], 'ui.button' => ['fileName' => 'jquery.ui.button.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => \true], 'ui.dialog' => ['fileName' => 'jquery.ui.dialog.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'ui.button'], 'theme' => \true], 'ui.menu' => ['fileName' => 'jquery.ui.menu.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position'], 'theme' => \true], 'ui.slider' => ['fileName' => 'jquery.ui.slider.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => \true], 'ui.spinner' => ['fileName' => 'jquery.ui.spinner.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.button'], 'theme' => \true], 'ui.tabs' => ['fileName' => 'jquery.ui.tabs.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => \true], 'ui.datepicker' => ['fileName' => 'jquery.ui.datepicker.min.js', 'dependencies' => ['ui.core'], 'theme' => \true], 'ui.progressbar' => ['fileName' => 'jquery.ui.progressbar.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => \true], 'ui.tooltip' => ['fileName' => 'jquery.ui.tooltip.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'effects.core'], 'theme' => \true], 'ui.accordion' => ['fileName' => 'jquery.ui.accordion.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'effects.core'], 'theme' => \true], 'effects.core' => ['fileName' => 'jquery.effects.core.min.js', 'dependencies' => [], 'theme' => \false], 'effects.blind' => ['fileName' => 'jquery.effects.blind.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.bounce' => ['fileName' => 'jquery.effects.bounce.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.clip' => ['fileName' => 'jquery.effects.clip.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.drop' => ['fileName' => 'jquery.effects.drop.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.explode' => ['fileName' => 'jquery.effects.explode.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.fade' => ['fileName' => 'jquery.effects.fade.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.fold' => ['fileName' => 'jquery.effects.fold.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.highlight' => ['fileName' => 'jquery.effects.highlight.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.pulsate' => ['fileName' => 'jquery.effects.pulsate.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.scale' => ['fileName' => 'jquery.effects.scale.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.shake' => ['fileName' => 'jquery.effects.shake.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.slide' => ['fileName' => 'jquery.effects.slide.min.js', 'dependencies' => ['effects.core'], 'theme' => \false], 'effects.transfer' => ['fileName' => 'jquery.effects.transfer.min.js', 'dependencies' => ['effects.core'], 'theme' => \false]];
    /**
     * @var array list of javascript definitions
     */
    protected static $js_def = [];
    /**
     * @var array list of javascript inline scripts
     */
    protected static $inline_script = [];
    /**
     * @var array list of javascript external scripts
     */
    protected static $inline_script_src = [];
    /**
     * @var string pattern used in replaceByAbsoluteURL
     */
    public static $pattern_callback = '#(url\((?![\'"]?(?:data:|//|https?:))(?:\'|")?)([^\)\'"]*)(?=[\'"]?\))#s';
    /**
     * @var string used for preg_replace_callback parameter (avoid global)
     */
    protected static $current_css_file;
    /**
     * @var string pattern used in packJSinHTML
     */
    public static $pattern_js = '/(<\s*script(?:\s+[^>]*(?:javascript|src)[^>]*)?\s*>)(.*)(<\s*\/script\s*[^>]*>)/Uims';
    protected static $pattern_keepinline = 'data-keepinline';
    /**
     * Minify JS.
     *
     * @param string $jsContent
     *
     * @return string
     */
    public static function packJS($jsContent)
    {
    }
    /**
     * Minify CSS.
     *
     * @param string $cssContent
     * @param string|bool $fileUri
     * @param array $importUrl
     *
     * @return bool|string
     */
    public static function minifyCSS($cssContent, $fileUri = \false, &$importUrl = [])
    {
    }
    /**
     * Replace URL by absolute URL.
     *
     * @param array $matches
     *
     * @return bool|string
     */
    public static function replaceByAbsoluteURL($matches)
    {
    }
    /**
     * addJS return javascript path.
     *
     * @param mixed $jsUri
     *
     * @return string
     */
    public static function getJSPath($jsUri)
    {
    }
    /**
     * addCSS return stylesheet path.
     *
     * @param mixed $cssUri
     * @param string $cssMediaType
     * @param bool $needRtl
     *
     * @return bool|array<string, string>
     */
    public static function getCSSPath($cssUri, $cssMediaType = 'all', $needRtl = \true)
    {
    }
    /**
     * Get Media path.
     *
     * @param array|string|null $mediaUri
     * @param string|null $cssMediaType
     *
     * @return bool|string|array<string, string>
     */
    public static function getMediaPath($mediaUri, $cssMediaType = \null)
    {
    }
    /**
     * return jqueryUI component path.
     *
     * @param string $component
     * @param string $theme
     * @param bool $checkDependencies
     *
     * @return array<string, array<string>>
     */
    public static function getJqueryUIPath($component, $theme, $checkDependencies)
    {
    }
    /**
     * return jquery plugin path.
     *
     * @param mixed $name
     * @param string|null $folder
     *
     * @return bool|array{js: string, css: array<string, string>}
     */
    public static function getJqueryPluginPath($name, $folder = \null)
    {
    }
    /**
     * return jquery plugin css path if exist.
     *
     * @param mixed $name
     * @param string|null $folder
     *
     * @return bool|array<string, string>
     */
    public static function getJqueryPluginCSSPath($name, $folder = \null)
    {
    }
    /**
     * Combine Compress and Cache CSS (ccc) calls.
     *
     * @param array $cssFiles
     *
     * @return array processed css_files
     */
    public static function cccCss($cssFiles)
    {
    }
    /**
     * Get backtrack limit.
     *
     * @return int|string|null
     */
    public static function getBackTrackLimit()
    {
    }
    /**
     * Combine Compress and Cache (ccc) JS calls.
     *
     * @param array $jsFiles
     *
     * @return array processed js_files
     */
    public static function cccJS($jsFiles)
    {
    }
    /**
     * Clear theme cache.
     */
    public static function clearCache()
    {
    }
    /**
     * Get JS definitions.
     *
     * @return array JS definitions
     */
    public static function getJsDef()
    {
    }
    /**
     * Get JS inline script.
     *
     * @return array inline script
     */
    public static function getInlineScript()
    {
    }
    /**
     * Add a new javascript definition at bottom of page.
     *
     * @param mixed $jsDef
     */
    public static function addJsDef($jsDef)
    {
    }
    /**
     * Add a new javascript definition from a capture at bottom of page.
     *
     * @param mixed $params
     * @param string $content
     * @param Smarty $smarty
     * @param bool $repeat
     */
    public static function addJsDefL($params, $content, $smarty = \null, &$repeat = \false)
    {
    }
    /**
     * @param string $output
     *
     * @return string|string[]|null
     */
    public static function deferInlineScripts($output)
    {
    }
    /**
     * Get all JS scripts and place it to bottom
     * To be used in callback with deferInlineScripts.
     *
     * @param array $matches
     *
     * @return bool|string Empty string or original script lines
     */
    public static function deferScript($matches)
    {
    }
}
