<?php

namespace app\controllers;

use app\models\Funcionarios;

class FuncionariosController extends \yii\rest\ActiveController
{

    public $modelClass = 'app\models\Funcionarios';

  

    public function actionRelatorio()
    {

        $total_masculino = Funcionarios::find()->where(['sexo' => 1])->count();
        $total_feminino = Funcionarios::find()->where(['sexo' => 0])->count();
        $media_idade = Funcionarios::find()->average('idade');
        $func_mais_novo = Funcionarios::find()->min('idade');
        $func_mais_velho = Funcionarios::find()->max('idade');

        return ([[
                'qtde_total_sexo_masculino' => $total_masculino,
                'qtde_total_sexo_feminino' => $total_feminino,
                'media_idade' => $media_idade,
                'funcionario_mais_novo' => $func_mais_novo,
                'funcionario_mais_velho' => $func_mais_velho
            ]]);
    }
}
