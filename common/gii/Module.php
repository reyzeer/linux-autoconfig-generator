<?php
/**
 * Created by PhpStorm.
 * User: reyzeer
 * Date: 12.10.16
 * Time: 22:55
 */

namespace common\gii;

use yii\gii\Module as GiiModule;

class Module extends GiiModule
{

    /**
     * @inheritdoc
     */
    public function coreGenerators()
    {
        return array_merge([
            'model' => ['class' => 'common\gii\generators\packagemodel\Generator'],
        ], parent::coreGenerators());
    }

}