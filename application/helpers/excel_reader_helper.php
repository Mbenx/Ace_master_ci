<?php

require('php-excel-reader/excel_reader2.php');
require('SpreadsheetReader.php');


function read($filename)
{
	$spreadsheet = new SpreadsheetReader('./assets/upload_excel/'.$filename);
	$sheets = $spreadsheet->Sheets();
	$spreadsheet->ChangeSheet(0);
	return $spreadsheet;
}

?>