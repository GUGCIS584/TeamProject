<?php

use PHPUnit\Framework\TestCase;
use \src\Faculty\Faculty;

final class FacultyTest extends TestCase
{
  public function testThatWeCanGetTheName()
  {
    $faculty = new Faculty;
    $faculty->setName('Josh');
    $this->assertEquals($faculty->getName(),'Josh');
  }

  public function testThatWeCanGetTheDepartment()
  {
    $faculty = new Faculty;
    $faculty->setDepartment('CIS');
    $this->assertEquals($faculty->getDepartment(),'CIS');
  }
  public function testThatWeCanGetTheYearlySalary()
  {
    $faculty = new Faculty;
    $faculty->setYearlySalary('60000');
    $this->assertEquals($faculty->getYearlySalary(),'60000');
  }
  public function testThatWeCanGetTheMonthlySalary()
  {
    $faculty = new Faculty;
    $faculty->setYearlySalary('5000');
    $this->assertEquals($faculty->getYearlySalary(),'5000');
  }
  /**
 * @expectedException \InvalidArgumentException
 */
     public function testsetYearlySalaryExceptionSalaryIsZero(){

         $actual=$this->employee->setYearlySalary(0);

     }
     /**
    * @expectedException \InvalidArgumentException
    */
        public function testsetMonthlySalaryExceptionSalaryIsZero(){

            $actual=$this->employee->setMonthlySalary(0);

        }

}
