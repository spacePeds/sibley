<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $name
 *
 * @property PostCategory[] $postCategories
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostCategories()
    {
        return $this->hasMany(PostCategory::className(), ['category_id' => 'id']);
    }

    /**
     * Get all the available categories
     * getAvailableCategories method is a static utility function 
     * to get the list of available categories. In the returned array, 
     * the keys are 'id' and the values are 'name' of the categories.
     * 
     * @return array available categories
     */
    public static function getAvailableCategories()
    {
        $categories = self::find()->orderBy('name')->asArray()->all();
        $items = ArrayHelper::map($categories, 'id', 'name');
        return $items;
    }
}
