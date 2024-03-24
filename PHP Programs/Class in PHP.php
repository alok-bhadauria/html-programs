<?php
class Student{
    public $RollNo;
    public $Name;
    public $Branch;
    public $Year;

    public function __construct($rollNo, $name, $branch, $year){
        $this->RollNo = $rollNo;
        $this->Name = $name;
        $this->Branch = $branch;
        $this->Year = $year;
    }
}

$student1 = new Student(7, "Alok Bhadauria", "Computer Science", "Junior");
$student2 = new Student(8, "Aman Kushwah", "Computer Science", "Junior");
$student3 = new Student(13, "Bhaskar Parihar", "Computer Science","Senior");
$student4 = new Student(25, "Manish Bhardwaj", "Computer Science", "Junior");
$student5 = new Student(29, "Ayaan Hussain","Computer Science", "Senior");
$student6 = new Student(35, "Priyanshu Sharma", "Computer Science", "Junior");

echo "Student 1 - Roll No: {$student1->RollNo}, Name: {$student1->Name},Branch: {$student1->Branch}, Year: {$student1->Year}<br>";
echo "Student 2 - Roll No: {$student2->RollNo}, Name: {$student2->Name},Branch: {$student2->Branch}, Year: {$student2->Year}<br>";
echo "Student 3 - Roll No: {$student3->RollNo}, Name: {$student3->Name},Branch: {$student3->Branch}, Year: {$student3->Year}<br>";
echo "Student 4 - Roll No: {$student4->RollNo}, Name: {$student4->Name},Branch: {$student4->Branch}, Year: {$student4->Year}<br>";
echo "Student 5 - Roll No: {$student5->RollNo}, Name: {$student5->Name},Branch: {$student5->Branch}, Year: {$student5->Year}<br>";
echo "Student 6 - Roll No: {$student6->RollNo}, Name: {$student6->Name},Branch: {$student6->Branch}, Year: {$student6->Year}<br>";

?>