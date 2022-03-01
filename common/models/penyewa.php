<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penyewa".
 *
 * @property int $id_penyewa
 * @property string $nama_lengkap
 * @property string $password
 * @property string $email
 * @property string $jenkel
 * @property string $pekerjaan
 * @property string $alamat
 * @property string $kota
 * @property string $provinsi
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Sewa[] $sewas
 */
class penyewa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyewa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'password', 'email', 'jenkel', 'pekerjaan', 'alamat', 'kota', 'provinsi'], 'required'],
            [['alamat'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_lengkap'], 'string', 'max' => 225],
            [['password', 'pekerjaan'], 'string', 'max' => 25],
            [['email', 'kota', 'provinsi'], 'string', 'max' => 110],
            [['jenkel'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penyewa' => 'Id Penyewa',
            'nama_lengkap' => 'Nama Lengkap',
            'password' => 'Password',
            'email' => 'Email',
            'jenkel' => 'Jenkel',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'provinsi' => 'Provinsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Sewas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSewas()
    {
        return $this->hasMany(Sewa::className(), ['id_penyewa' => 'id_penyewa']);
    }
}
