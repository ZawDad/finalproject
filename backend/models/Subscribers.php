<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $street_address
 * @property string $parish
 * @property string $email
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'gender', 'street_address', 'parish', 'email'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 150],
            [['gender'], 'string', 'max' => 10],
            [['street_address', 'email'], 'string', 'max' => 200],
            [['parish'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'street_address' => 'Street Address',
            'parish' => 'Parish',
            'email' => 'Email',
        ];
    }
}
