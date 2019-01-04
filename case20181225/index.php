<?php
$class_id_arr = $_REQUEST['class'];
$student_arr = array();
foreach($class_id_arr as $class) {
	// 如果该班级没有学生的情况
	$sql = 'SELECT a.student_name, a.student_code, c.class_name, d.grade_name FROM `zv_student` as a, `zv_class` as b, `zv_grade` as c WHERE `class_ID`=' . $class . 'AND a.class_ID=b.ID AND a.grade_ID=c.ID;';
	$student_in_class = $db->getAll($sql);
	foreach($student_in_class as $sstudent) {

	}
}



require_once('./PHPExcel.php');
require_once('./PHPExcel/IOFactory.php');
foreach($student_arr as $student_in_class) {
	
}








if (!empty($this->DATA_TABLE)) {
	$attendance_class_ID = $_REQUEST['class'];
	$students = array();
	foreach ($attendance_class_ID as $key => $class_ID_o) {
		$students[$key] = $this->my_dbobj->getAll('SELECT a.student_code, a.student_name, c.grade_name, b.class_name FROM `zv_student` as a, `zv_class` as b, `zv_grade` as c WHERE a.class_ID = ' . $class_ID_o . ' AND a.grade_ID = c.ID AND a.class_ID = b.ID;');
	}
	require_once(ROOT_PATH . 'Common/PHPExcel.php');
	require_once(ROOT_PATH . 'Common/PHPExcel/IOFactory.php');
	$objPHPExcel = new PHPExcel();
	$count = 0;
	foreach ($students as $key => $student) {
		if ($key < count($students)) {
			$objPHPExcel->createSheet();
		}
		$objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->setActiveSheetIndex($count);
		$count++;
		$class_name = $this->my_dbobj->getRow('SELECT b.grade_name as grade_name, a.class_name as class_name FROM `zv_class` as a, `zv_grade` as b WHERE a.grade_ID = b.ID AND a.ID =' . $attendance_class_ID[$key]);
		$sheet_title = $class_name['grade_name'] . $class_name['class_name'];
		$objPHPExcel->getActiveSheet()->setTitle($sheet_title);
		$A1_title = $sheet_title;
		
		
                // 设置边框
		
                // 设置学号列值的类型为字符串，防止自动转为科学计数法
//                $objPHPExcel->getActiveSheet()->getStyle('C')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                // 设置单元格宽度
		
		
	}
	$filename = date('YmdHis', time()) . rand(100, 999) . '.xls';
	$this->outputFile($filename, '/file/attendance/export/', 1, $objPHPExcel);
	$my_http_server = stripos($_SERVER['HTTP_REFERER'], 'index.php') != false ? str_replace('/index.php', '', $_SERVER['HTTP_REFERER']) : $_SERVER['HTTP_REFERER'];
	$ajax_return = array(
		'file' => $my_http_server . '/file/attendance/export/' . $filename,
		'status' => '200'
	);
	echo json_encode($ajax_return);
} else {
	$grade_list = array();
	if (empty($this->current_admin_type) || 'first' == $this->current_admin_type) {
                //学校账号和学校管理员账号
		$grade_list = $this->my_dbobj->getAll('SELECT `ID`, `grade_name` FROM `zv_grade` WHERE `school_ID` = ' . $_SESSION['school_ID'] . ';');
		foreach ($grade_list as $key => $grade) {
			$grade_list[$key]['class_list'] = $this->my_dbobj->getAll('SELECT `ID`, `class_name` FROM `zv_class` WHERE `grade_ID` = ' . $grade['ID'] . ';');
		}
	} else if ('second' == $this->current_admin_type) {
                //年级管理员，例如00003602
		$grade_list = $this->my_dbobj->getAll('SELECT `ID`, `grade_name` FROM `zv_grade` WHERE `ID` ' . $this->grade_Filter_sql . ';');
		foreach ($grade_list as $key => $grade) {
			$grade_list[$key]['class_list'] = $this->my_dbobj->getAll('SELECT `ID`, `class_name` FROM `zv_class` WHERE `grade_ID` = ' . $grade['ID'] . ';');
		}
	} else if ('third' == $this->current_admin_type) {
                //班级管理员，例如00003603
		$grade_id_list = $this->my_dbobj->getCol('SELECT `grade_ID` FROM `zv_class` WHERE `ID` ' . $this->class_Filter_sql . ';');
		$in_grade = 'IN (' . implode(',', $grade_id_list) . ')';
		$grade_list = $this->my_dbobj->getAll('SELECT `ID`, `grade_name` FROM `zv_grade` WHERE ID ' . $in_grade . ';');
		foreach ($grade_list as $key => $grade) {
			$grade_list[$key]['class_list'] = $this->my_dbobj->getAll('SELECT `ID`, `class_name` FROM `zv_class` WHERE `grade_ID` = ' . $grade['ID'] . ' AND `ID` ' . $this->class_Filter_sql . ';');
		}
	}
	$this->my_tplobj->assign(array('grade_list' => $grade_list));
	$this->my_tplobj->display("school/school_student_attendance_export.html.php");
}



function arrangeData() {

	$objPHPExcel->getactivesheet()->setcellvalue('A1', $A1_title . '出勤登记表');
	$objPHPExcel->getactivesheet()->getRowDimension('1')->setRowHeight('30');
	$objPHPExcel->getactivesheet()->mergeCells('A1:AK1');
	

	$objPHPExcel->getactivesheet()->mergeCells('A2:A3');
	$objPHPExcel->getactivesheet()->mergeCells('B2:B3');
	$objPHPExcel->getactivesheet()->mergeCells('C2:C3');
	$objPHPExcel->getactivesheet()->mergeCells('D2:D3');
	$objPHPExcel->getactivesheet()->mergeCells('E2:AI2');
	$objPHPExcel->getActiveSheet()->getStyle('A2:AK3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    // 设置背景色
	$objPHPExcel->getActiveSheet()->getStyle('A2:AK3')->getFill()->getStartColor()->setARGB('FFA1A7E0');
	$objPHPExcel->getActiveSheet()->getStyle('A1:AK3')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(12);
	$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(12);
	foreach ($student as $k => $s) {
		$row = $k + 5;
		if($type == 0) {
			foreach ($cell_name as $c => $cell) {
				if ($c > 3 && $c < 35) {
					$objValidation = $objPHPExcel->getActiveSheet()->getCell($cell . $row)->getDataValidation();
					$objValidation->setType(PHPExcel_Cell_DataValidation::TYPE_LIST)
					->setErrorStyle(PHPExcel_Cell_DataValidation::STYLE_INFORMATION)
					->setAllowBlank(false)
					->setShowInputMessage(true)
					->setShowErrorMessage(true)
					->setShowDropDown(true)
					->setErrorTitle('输入的值有误！')
					->setError('您输入的值不在允许的范围内！')
					->setPromptTitle('考勤状态')
					->setFormula1('"0,1"');
				}
			}
		} else if($type == 1) {
			foreach ($cell_name as $c => $cell) {
				if ($c > 3 && $c < 35) {
					$index = $c < 10 ? '0' . $c : '' . $c;
					$objPHPExcel->getactivesheet()->setcellvalue($cell . $row, $s['value' . $index]);
				}
			}
			$objPHPExcel->getactivesheet()->setcellvalue($cell_name[count($s)] . $row, $s['value' . $index]);
		}
		
		$objPHPExcel->getactivesheet()->setcellvalue('A' . $row, $s['grade_name']);
		$objPHPExcel->getactivesheet()->setcellvalue('B' . $row, $s['class_name']);
		$objPHPExcel->getactivesheet()->setCellValueExplicit('C' . $row,$s['student_code'],PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getactivesheet()->setcellvalue('D' . $row, $s['student_name']);
	}
}



public function setFileHeader($excelWriteObj, $type) {
	$cell_name = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK');
	$cell_title1 = array('年级', '班级', '学生学号', '学生姓名', '考勤日期', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '应出勤', '实际出勤');
	$cell_title2 = array('', '', '', '', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '应出勤', '天');
	$cell_example = array('小班', '一班', '2014710', '测试者', '0', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '0', '1', '1', '22', '22');
	// 表头和测试数据
	foreach ($cell_name as $k => $cell) {
		$excelWriteObj->getActiveSheet()->getColumnDimension($cell)->setWidth(3);
		$excelWriteObj->getactivesheet()->setcellvalue($cell . 2, $cell_title1[$k]);
		$excelWriteObj->getactivesheet()->setcellvalue($cell . 3, $cell_title2[$k]);
		$excelWriteObj->getactivesheet()->setcellvalue($cell . 4, $cell_example[$k]);
	}
}

public function setFileData() {

}