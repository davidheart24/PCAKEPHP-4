<?php


$spreadsheet = $this->getSpreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1','Hello Excel');
