<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property string $kode_prodi
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'alamat', 'kode_prodi'], 'required'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
            [['alamat'], 'string', 'max' => 100],
            [['kode_prodi'], 'string', 'max' => 15],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'kode_prodi' => 'Kode Prodi',
        ];
    }
}
