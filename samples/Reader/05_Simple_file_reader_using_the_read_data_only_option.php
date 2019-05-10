<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

require __DIR__ . '/../Header.php';

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/sampleData/19-04-19_07-50-00.50_Complete Patient Census_AllFC.xlsx';

$helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory with a defined reader type of ' . $inputFileType);
$reader = IOFactory::createReader($inputFileType);
$helper->log('Turning Formatting off for Load');
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($inputFileName);

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
var_dump($sheetData);
