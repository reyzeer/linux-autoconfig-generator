<?php

namespace common\gii\generators\packagemodel;

use \yii\gii\generators\model\Generator as ModelGenerator;

/**
 * TODO
 */
class Generator extends ModelGenerator
{

    public $packageName;

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Package model generator';
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return 'This generator generates an ActiveRecord class, specfic object and search class class for the specified database table.';
    }

    /**
     * @inheritdoc
     */
    public function generate()
    {
        // TODO: Implement generate() method.
    }

}