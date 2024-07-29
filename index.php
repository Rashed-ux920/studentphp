<?php
class Student {
    private $age;
    private $name;
    public $studentID;

    public function __construct($age, $name, $studentID) {
        $this->age = $age;
        $this->name = $name;
        $this->studentID = $studentID;
    }

    public function setage($age) {
        $this->age = $age;
    }

    public function getage() {
        echo $this->age;
    }

    public function setname($name) {
        $this->name = $name;
    }

    public function getname() {
        echo $this->name;
    }

    public function setstudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getstudentID() {
        return $this->studentID;
    }

    public function getdetails() {
        echo "the student name is " . $this->name;
        echo "<br>";
        echo "the student age is " . $this->age;
        echo "<br>";
        echo "the student student ID is " . $this->studentID;
    }

    public function __toString() {
        return $this->name . " " . $this->age . " " . $this->studentID;
    }

    public function __destruct() {
        echo "<br>";
        echo "the student saved";
        echo "<br>";
    }
}

class classroom {
    private $studentsclass;

    public function __construct() {
        $this->studentsclass = [];
        echo "you are in the classroom class";
        echo "<br>";
    }

    public function addstudent($student) {
        $this->studentsclass[] = $student;
    }

    public function classroomlist() {
        return $this->studentsclass;
    }

    public function displayarray() {
        foreach ($this->classroomlist() as $student) {
            echo "<br>";
            echo $student;
        }
    }

    public function removestudent($studentID) {
        foreach ($this->studentsclass as $key => $student) {
            if ($student->getstudentID() === $studentID) {
                unset($this->studentsclass[$key]);
                $this->studentsclass = array_values($this->studentsclass);
                echo "the student removed";
                return true;
            }
        }
        echo "<br>";
        echo "the student did not removed";
        return false;
    }
}

$student1 = new Student(20, "rashed", 12556);
echo "<br>";
$student1->getage();
echo "<br>";
$student1->getname();
echo "<br>";
$student1->getstudentID();
echo "<br>";

$student2 = new Student(20, "omar", 746446);
echo "<br>";
$student2->getdetails();
echo "<br>";
$student3 = new Student(21, "ahmad", 676466);
echo "<br>";
$contaner = new classroom();
echo "<br>";

$contaner->addstudent($student1);
$contaner->addstudent($student2);
$contaner->addstudent($student3);

$contaner->displayarray();
$contaner->removestudent(746446);
// var_dump($contaner->removestudent("12556"));
$contaner->displayarray();