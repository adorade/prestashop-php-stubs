<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class StatisticsControllerCore extends \FrontController
{
    /** @var bool */
    public $display_header = \false;
    /** @var bool */
    public $display_footer = \false;
    protected $param_token;
    public function postProcess(): void
    {
    }
    /**
     * Log statistics on navigation (resolution, plugins, etc.).
     */
    protected function processNavigationStats(): void
    {
    }
    /**
     * Log statistics on time spend on pages.
     */
    protected function processPageTime(): void
    {
    }
}
