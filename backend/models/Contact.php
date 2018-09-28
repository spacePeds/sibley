<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property string $id
 * @property string $method
 * @property string $post_id
 * @property string $digits
 * @property string $notes
 *
 * @property Posts $post
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['method', 'post_id', 'digits', 'notes'], 'required'],
            [['method'], 'string'],
            [['post_id'], 'integer'],
            [['digits'], 'string', 'max' => 100],
            [['notes'], 'string', 'max' => 255],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Posts::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'method' => 'Method',
            'post_id' => 'Post ID',
            'digits' => 'Digits',
            'notes' => 'Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Posts::className(), ['id' => 'post_id']);
    }
}
