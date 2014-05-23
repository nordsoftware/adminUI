<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminUiDatePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $css = [                
        'css/daterangepicker/daterangepicker-bs3.css',
    ];
    
    public $js  = [
            'js/plugins/daterangepicker/daterangepicker.js',
    ];        
}