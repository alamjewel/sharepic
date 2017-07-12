<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Utility\Config;
use SMS\Auth\Auth;
use SMS\Phonebook\Phonebook;
//utility::dd($_REQUEST);
$new_login = new Auth();
$check=$new_login->is_loggedin();
$login_user="";
$login_user=$_SESSION['username'];
if(!$check){
    Message::set('<div class="alert alert-success"><strong>Please Login to View The Content!</strong></div>');
    Utility::redirect("../../index.php");
}

$contact = new Phonebook();

$var = $contact->pdf($login_user);
//utility::dd($var);



/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
    die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'form' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'phpoffice' . DIRECTORY_SEPARATOR . 'phpexcel' . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR . 'PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("User")
        ->setLastModifiedBy("User")
        ->setTitle("UserList")
        ->setSubject("Office 2007 XLSX Test Document")
        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        ->setKeywords("office 2007 openxml php")
        ->setCategory("Test result file");


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', 'ID')
        ->setCellValue('B1', 'Full Name')
        ->setCellValue('C1', 'Email')
        ->setCellValue('D1', 'Mobile')
        ->setCellValue('E1', 'Contact Group')
        ->setCellValue('F1', 'Image Path');

$counter = 2;
foreach($var as $contacts){
  $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$counter, $contacts['id'])
            ->setCellValue('B'.$counter, $contacts['firstname'] . $contacts['lastname'])
            ->setCellValue('C'.$counter, $contacts['email'])
            ->setCellValue('D'.$counter, $contacts['mobile'])
            ->setCellValue('E'.$counter, $contacts['groups'])
            ->setCellValue('F'.$counter, $contacts['image']);
    $counter++;
}


// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Contact List');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Contact List.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
