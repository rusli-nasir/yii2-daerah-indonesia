<?php

namespace fredyns\daerahIndonesia\controllers;

use fredyns\daerahIndonesia\models\Kota;

/**
 * This is the class for controller "KecamatanController".
 */
class KecamatanController extends \fredyns\daerahIndonesia\controllers\base\KecamatanController
{

    /**
     * menyediakan data untuk depdrop
     * @param integer $selected
     *
     * @return mixed
     */
    public function actionDepdropOptions($selected = 0)
    {
        echo \fredyns\daerahIndonesia\helpers\DepdropHelper::getOptionData([
            'modelClass' => Kota::className(),
            'parents' => [
                'kota_id' => function($value) {
                    return ($value > 0) ? $value : "";
                },
            ],
            'selected' => $selected,
        ]);
    }
}