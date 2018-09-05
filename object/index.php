<?php

class Student
{
    protected $name = "zulfiqar";
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}

class StudentCourse extends Student
{
    private $coursesname = [];

    function __construct($name, $age, $courses)
    {
        $this->coursesname = $courses;
        $this->name = $name;
        $this->age = $age;
    }

    function returnStudent()
    {
        return $student = [$this->coursesname, $this->name, $this->age];
    }
}

$student = new StudentCourse("zulfiqar", "16", ['physics' => '14', 'english' => '20']);
$my_courses = $student->returnStudent();
echo '<pre>';
print_r($my_courses);


