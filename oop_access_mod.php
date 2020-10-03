<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class student
{
    public $name;
    
    private $address;
       
    public function name()
    {
        echo "Reza Fatikhul Hidayat\n";
    }
    
    public static function names()
    {
        echo "Smk muhammadiyah 04 sukorejo\n";
    }
    
    public function setAddress($address)
    {
        $this->address=$address;
    }
    
    public function getaddress()
    {
        return $this->address;
    }
}

$student=new student();

$student->name();

student::names();

$student->setAddress("Alamat: Gentinggunung sukorejo kendal");

echo $student->getAddress().PHP_EOL;


