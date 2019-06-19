<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property int $id
 * @property string $nome
 * @property string $sobrenome
 * @property int $idade
 * @property int $sexo
 */
class Funcionarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idade', 'sexo'], 'integer'],
            [['nome', 'sobrenome'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sobrenome' => 'Sobrenome',
            'idade' => 'Idade',
            'sexo' => 'Sexo',
        ];
    }

    public function fields(){
        return [
            'id' => 'id',
            'nome' => 'nome',
            'sobrenome' => 'sobrenome',
            'nome_completo' => function ($model){
                return $model->nome . " " . $model->sobrenome;
            },
            'idade' => 'idade',
            'sexo' => function ($model){
                return $model->sexo == 1 ? 'Masculino' : 'Feminino';
            }
        ];
    }


 


   

}
