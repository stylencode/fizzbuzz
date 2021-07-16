<?php 

class FizzBuzzTest extends \PHPUnit\Framework\TestCase {

    public function testCheckFizz()
    {
        $fb = new FizzBuzz;

        $expected = 'fizz';
        $result = $fb->checkFizz (3);

        $this ->assertEquals ($expected,$result); 
    }

    public function testCheckBuzz()
    {
        $fb = new FizzBuzz;

        $expected = 'buzz';
        $result = $fb->checkBuzz (5);

        $this ->assertEquals ($expected,$result); 
    }

    public function testCheckFizzBuzz()
    {
        $fb = new FizzBuzz;

        $expected = 'fizzbuzz';
        $result = $fb->checkFizzBuzz (15);

        $this ->assertEquals ($expected,$result); 
    }

    public function testAmILucky()
    {
        $fb = new FizzBuzz;

        $expected = 'lucky';
        $result = $fb->amILucky (13);

        $this ->assertEquals ($expected,$result); 
    }


}


