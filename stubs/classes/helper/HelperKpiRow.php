<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class HelperKpiRowCore extends \Helper
{
    /**
     * @var string
     */
    public $base_folder = 'helpers/kpi/';
    /**
     * @var string
     */
    public $base_tpl = 'row.tpl';
    public $kpis = [];
    public $refresh = \true;
    public function generate()
    {
    }
}
