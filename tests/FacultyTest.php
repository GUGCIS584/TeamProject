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

  public function testThatWeCanGetTheTypeofJob()
  {
    $faculty = new Faculty;
    $faculty->setTypeofJob('part-time');
    $this->assertEquals($faculty->getTypeofJob(),'part-time');
  }

  public function testThatWeCanGetTheTotalSubject()
  {
    $faculty = new Faculty;
    $faculty->setTotalSubject('2');
    $this->assertEquals($faculty->getTotalSubject(),'2');
  }
  public function testThatWeCanGetSubject1()
  {
    $faculty = new Faculty;
    $faculty->setSubject1('NOSQL');
    $this->assertEquals($faculty->getSubject1(),'NOSQL');
  }
  public function testThatWeCanGetSubject2()
  {
    $faculty = new Faculty;
    $faculty->setSubject2('NOSQL');
    $this->assertEquals($faculty->getSubject2(),'NOSQL');
  }public function testThatWeCanGetSubject3()
  {
    $faculty = new Faculty;
    $faculty->setSubject3('NOSQL');
    $this->assertEquals($faculty->getSubject3(),'NOSQL');
  }public function testThatWeCanGetSubject4()
  {
    $faculty = new Faculty;
    $faculty->setSubject4('NOSQL');
    $this->assertEquals($faculty->getSubject4(),'NOSQL');
  }public function testThatWeCanGetSubject5()
  {
    $faculty = new Faculty;
    $faculty->setSubject5('NOSQL');
    $this->assertEquals($faculty->getSubject5(),'NOSQL');
  }
  public function testThatWeCanGetPayPerSubject()
  {
    $faculty = new Faculty;
    $faculty->setPayPerSubject('3000');
    $this->assertEquals($faculty->getPayPerSubject(),'3000');
  }
  public function testThatWeCanGetHours()
  {
    $faculty = new Faculty;
    $faculty->setHours('15');
    $this->assertEquals($faculty->getHours(),'15');
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
    $faculty->setMonthlySalary('5000');
    $this->assertEquals($faculty->getMonthlySalary(),'5000');
  }
  /**
 * @expectedException \InvalidArgumentException
 */
     public function testsetYearlySalaryExceptionSalaryIsZero(){

         $actual=$this->faculty->setYearlySalary(0);

     }
     /**
    * @expectedException \InvalidArgumentException
    */
        public function testsetMonthlySalaryExceptionSalaryIsZero(){

            $actual=$this->faculty->setMonthlySalary(0);

        }

}
