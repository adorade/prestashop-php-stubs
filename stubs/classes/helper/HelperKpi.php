<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class HelperKpiCore extends \Helper
{
    /**
     * @var string
     */
    public $base_folder = 'helpers/kpi/';
    /**
     * @var string
     */
    public $base_tpl = 'kpi.tpl';
    public $id;
    public $icon;
    public $chart;
    public $color;
    public $title;
    public $subtitle;
    public $value;
    public $data;
    public $source;
    public $refresh = \true;
    public $href;
    public $tooltip;
    public function generate()
    {
    }
}
