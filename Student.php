<?php
class Student 
{
    public $name, $surname, $age, $faculty, $course, $is_student;  

    public function __construct($name, $surname, $age, $faculty, $course, $is_student) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->faculty = $faculty;
        $this->course = $course;
        $this->is_student = true;
    }

    static $COURSE = 5;
    
    private function setStydent() {
        if( $this->course > $COURSE ) { 
        $this->is_student = false;
        $this->finished();        
        }
    }

    private function incrementAge() {
        $this->age += 1;
        $this->ageChanged();
    }

    private function incrementCourse() {
        $this->course += 1;
        $this->courseChanged();
    }

    private function changeFaculty($newFaculty) {
        $this->faculty = $newFaculty;
        $this->facultyChanged();
    }

    private function ageChanged() {
        echo "Возраст изменен на $this->age";
    }

    private function courseChanged() {
        echo "Перевод на $this->course курс";
    }

    private function facultyChanged() {
        echo "Перевод на факультет $this->faculty";        
    }

    private function finished() {
        echo "Обучение закончено";
    }

}