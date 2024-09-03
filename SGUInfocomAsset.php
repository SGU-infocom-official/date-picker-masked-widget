<?php

/**
 * @copyright Copyright (c) 2016 dianakaal
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @author dianakaal <dianakaal@gmail.com>
 * @Date: 12/02/16
 * @Description: Combination of Yii framework's Input Mask and yii2-date-picker widget.
 * @package sguinfocom\DatePickerMaskedWidget
 */

namespace sguinfocom\DatePickerMaskedWidget;

use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * SGUInfocomAsset
 *
 */
class SGUInfocomAsset extends AssetBundle
{
    //$sourcePath: specifies the root directory that contains the asset files in this bundle. 
    public $sourcePath = '@vendor/sgu-infocom-official';

    //$depends: an array listing the names of the asset bundles that this bundle depends on, in order. 
    public $depends = [BootstrapPluginAsset::class]; //IS THIS AUTOMATICALLY INCLUDED IN YII2? so I don't need to add it to my project separately

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'inputmask_v3.3.11/dist/jquery.inputmask.bundle.js' : 'inputmask_v3.3.11/dist/min/jquery.inputmask.bundle.min.js';
    }
}
