<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 8/29/18
 * Time: 1:57 PM
 */

namespace Teacher;

use student\Student;
use student1\Student as S;

require_once '../studentclass/Student.php';
require_once '../student1class/Student.php';

class Teacher
{


}

$student=new Student('asd');
echo $student->getStudentName();