<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property string $kode_prodi
 * @property string $nama_prodi
 * @property string $alamat_prodi
 * @property string $nip_prodi
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prodi', 'nama_prodi', 'alamat_prodi', 'nip_prodi'], 'required'],
            [['kode_prodi'], 'string', 'max' => 3],
            [['nama_prodi'], 'string', 'max' => 30],
            [['alamat_prodi'], 'string', 'max' => 100],
            [['nip_prodi'], 'string', 'max' => 20],
            [['kode_prodi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_prodi' => 'Kode Prodi',
            'nama_prodi' => 'Nama Prodi',
            'alamat_prodi' => 'Alamat Prodi',
            'nip_prodi' => 'Nip Prodi',
        ];
    }
    public function cariDaftarProdi() {
        $data_prodi=Prodi::find()->all();
        foreach ($data_prodi as $value) {
            $data[$value->kode_prodi]=$value->kode_prodi.'-'.$value->nama_prodi;
            
        }
        return $data;
    }
}
