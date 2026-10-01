<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
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
}
