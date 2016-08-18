<?php

namespace common\components\excel;

use Yii;
use yii\helpers\ArrayHelper;
use common\components\helpers\DateHelper;

use PHPExcel;
use PHPExcel_Style_Alignment;
use PHPExcel_Writer_Excel5;
use PHPExcel_Style_Border;
use PHPExcel_Style_Font;
use PHPExcel_Cell;
use yii\helpers\FileHelper;

class import
{

//    /**
//     * example
//     *
//     * @return bool|int
//     * @throws \yii\base\Exception
//     * @throws \PHPExcel_Writer_Exception
//     * @throws \yii\base\InvalidParamException
//     */
//    public function example()
//    {
//        $models = [];
//
//        $array = ArrayHelper::toArray($models, ['common\models\Job' => [
//            'client',
//            'contractor',
//            'date',
//            'comment'
//        ]]);
//
//        $xls = new PHPExcel();
//        $xls->setActiveSheetIndex(0);
//        $sheet = $xls->getActiveSheet();
//        $sheet->setTitle('Worksheet');
//
//        return self::responseExcel(self::conclusionTable($xls, $array, [
//            'headerStyle' => [
//                'borders' => [
//                    'allborders' => [
//                        'style' => PHPExcel_Style_Border::BORDER_THIN
//                    ]
//                ]
//            ],
//            'bodyTableStyle' => [
//                'borders' => [
//                    'allborders' => [
//                        'style' => PHPExcel_Style_Border::BORDER_THIN
//                    ]
//                ]]
//        ]));
//    }


    /**
     * @param PHPExcel $xls
     * @param $array
     * @param null $config
     * @return PHPExcel
     */
    public static function conclusionTable(PHPExcel $xls, $array, $config = null)
    {
        $y = $config['row'] ?: 1;
        $x = $config['column'] ?: 0;

        if (!is_int($y) && !is_int($x)) {
            throw new \InvalidArgumentException('Row and Column must be in format');
        }

        $attributes = [];

        $styleBeginX = $x;
        $styleBeginY = $y;

        $styleEndCountX = 0;
        $styleEndCountY = 0;

        if ($array) {
            foreach ($array as $k => $v) {


                if ($k === 0) {
                    $headerCount = $x + 0;
                    foreach ($array[$k] as $item => $value) {
                        $attributes[$item] = $headerCount;
                        $xls->getActiveSheet()->setCellValueByColumnAndRow($headerCount, $y, $item);
                        $styleEndCountX = $headerCount++;
                    }
                    ++$y;
                }

                foreach ($v as $key => $value) {
                    $xls->getActiveSheet()->setCellValueByColumnAndRow($attributes[$key], $y, $value);
                }

                $styleEndCountY = $y++;
            }

            $beginLetter = PHPExcel_Cell::stringFromColumnIndex($styleBeginX);
            $endLetter = PHPExcel_Cell::stringFromColumnIndex($styleEndCountX);

            // body style
            if ($config['bodyTableStyle']) {
                $xls->getActiveSheet()->getStyle($beginLetter . ++$styleBeginY . ':' . $endLetter . $styleEndCountY)->applyFromArray($config['bodyTableStyle']);
            }


            // header style
            if ($config['headerStyle']) {
                $styleEndCountY -= count($array);
                $xls->getActiveSheet()->getStyle($beginLetter . --$styleBeginY . ':' . $endLetter . $styleEndCountY)->applyFromArray($config['headerStyle']);
            }

            // size
            for ($i = $styleBeginX; $i <= $styleEndCountX; $i++) {
                $xls->getActiveSheet()->getColumnDimension(PHPExcel_Cell::stringFromColumnIndex($i))->setAutoSize(true);
            }
        }
        return $xls;
    }


    /**
     * @param PHPExcel $xls
     * @return bool|int
     * @throws \yii\base\Exception
     * @throws \PHPExcel_Writer_Exception
     * @throws \yii\base\InvalidParamException
     */
    public static function responseExcel(PHPExcel $xls)
    {
        $objWriter = new PHPExcel_Writer_Excel5($xls);
        $path = Yii::getAlias('@api') . '';
        $fileName = '';

        if (FileHelper::createDirectory($path, 0777, true)) {
            $objWriter->save($path . $fileName);
            return file_exists($path);
        }
        return false;
    }
}