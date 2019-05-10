<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

require __DIR__ . '/../Header.php';

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/sampleData/19-04-19_07-50-00.50_Complete Patient Census_AllFC.xlsx';

// Create a new Reader of the type defined in $inputFileType
$reader = IOFactory::createReader($inputFileType);
// Load $inputFileName to a PhpSpreadsheet Object
$spreadsheet = $reader->load($inputFileName);

// Read an array list of any custom properties for this document
$customPropertyList = $spreadsheet->getProperties()->getCustomProperties();

foreach ($customPropertyList as $customPropertyName) {
    $helper->log($customPropertyName);
}
