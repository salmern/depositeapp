<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deposit".
 *
 * @property int $deposit_id
 * @property int $deposit_value
 * @property string $deposit_date
 * @property string $deposit_reason
 */
class Deposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deposit_id', 'deposit_value', 'deposit_date', 'deposit_reason'], 'required'],
            [['deposit_id', 'deposit_value'], 'integer'],
            [['deposit_date'], 'safe'],
            [['deposit_reason'], 'string', 'max' => 1000],
            [['deposit_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'deposit_id' => 'Deposit ID',
            'deposit_value' => 'Deposit Value',
            'deposit_date' => 'Deposit Date',
            'deposit_reason' => 'Deposit Reason',
        ];
    }
}
