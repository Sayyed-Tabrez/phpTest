<?php
require_once 'vendor/autoload.php';
require_once "database/database.php";

$database = new Database();
$conn = $database->getConnection();
if (!$conn) {
	LoggerInfo($GLOBALS["currentFileName"], "Connection Error: " . $conn);
	return;
}

$file_name = $_FILES['file']['name'];
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($file_name);
for($j = 2; $j < 9; $j++){
	$param = [];
	$param['DATE_TXT'] = $param['DATE_FORMAT'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("A".(string)$j)->getValue());
	$param['EMP_ID'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("B".(string)$j)->getValue());
	$param['NAME'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("C".(string)$j)->getValue());
	$param['WORKING_TYPE'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("D".(string)$j)->getValue());
	$param['START_TIME'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("E".(string)$j)->getValue());
	$param['END_TIME'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("F".(string)$j)->getValue());
	$param['STORE_ID'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("G".(string)$j)->getValue());
	$param['STORE_NAME'] = handleBlankCell($spreadsheet->getActiveSheet()->getCell("H".(string)$j)->getValue());
	$param['CREATED_DATE_TIME'] = $param['UPDATED_DATE_TIME'] = date("Y-m-d H:i:s");
	$sql = "INSERT INTO employee (DATE_TXT, DATE_FORMAT, EMP_ID, NAME, WORKING_TYPE, START_TIME, END_TIME, STORE_ID, STORE_NAME, CREATED_DATE_TIME, UPDATED_DATE_TIME) VALUES (:DATE_TXT, :DATE_FORMAT, :EMP_ID, :NAME, :WORKING_TYPE, :START_TIME, :END_TIME, :STORE_ID, :STORE_NAME, :CREATED_DATE_TIME, :UPDATED_DATE_TIME)";
	$result = $database->insertQuery($conn, $sql, $param);
	if ($result == 'failed'){
		echo "failed";
		break;
	}
}
echo "success";

function handleBlankCell($cell_value){
	if($cell_value == '')
		return '';
	else
		return $cell_value;
}
?>