<?php

namespace Schooltrip;

use Schooltrip\SchooltripList;

class Schooltrip{
    private $name;
    private $student;
    Private $schooltripList = [];
    private static $countStudent = 0;
    private static $countList = -1;
    private static $ammount = 3;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addSchooltripList($name)
    {
        $this->schooltripList[] = new SchooltripList();
        Schooltrip::$countList++;
        $this->schoolttripLists[self::$countList]->setTeachet(Teacher::$teachers[self::$countList]);
    }

    public function addStudent($student){
        if(Schooltrip::$countStudent == 0 || Schooltrip::$countStudent %self::$ammount == 0);
        {
        $this->addSchooltripList();
        }


        $this->schooltripLists[self::$countList]->addStudentToList($student);
        self::$countStudent++;

    }

    public function getSchooltripList()
    {
        return $this->schooltripLists;
    }
}