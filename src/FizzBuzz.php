<?php 

class FizzBuzz{

    public $data;
    public $reportData;
    
    public function __construct($dataSet = null) {
        $this->data = $dataSet;
    }

    public function checkFizz($num)
    {
        $mod = $num%3;
        $result = ($mod==0 ? 'fizz' : 0);
        
        return $result;
    }

    public function checkBuzz($num)
    {
        $mod = $num%5;
        $result = ($mod==0 ? 'buzz' : 0);
        
        return $result;
    }

    public function checkFizzBuzz($num)
    {
        $mod = $num%15;
        $result = ($mod==0 ? 'fizzbuzz' : 0);
        
        return $result;
    }

    // adding for Step 2 - Lucky
    public function amILucky($num)
    {
        $mod = strval($num);
     
        // look through the string to see if there is a 3
        $match = preg_match('/3/', $mod);

        // if there is a match, return lucky, otherwise 0
        $result = ($match!=0 ? 'lucky' : $match);

        return $result;
    }

    // Step 1 as specified in the code instructions
    public function step1()
    {   
        $ar = $this->data;

        // walk through array and filter numbers
        array_walk( $ar, function(&$val) { 
            
            // grab individual values to compare
            $fizz = $this->checkFizz($val); 
            $buzz = $this->checkBuzz($val);
            $fizzbuzz = $this->checkFizzBuzz($val);

            // if return is a value
            if ($fizz)      {$val = $fizz;} 
            if ($buzz)      {$val = $buzz;}
            if ($fizzbuzz)  {$val = $fizzbuzz;}

            echo $val." "; 
        
        } );

        return $ar;   
        
    }

    public function step2()
    {   
        $ar = $this->data;

        // walk through array and filter numbers
        array_walk( $ar, function(&$val) { 
            
            // grab individual values to compare
            $fizz = $this->checkFizz($val); 
            $buzz = $this->checkBuzz($val);
            $fizzbuzz = $this->checkFizzBuzz($val);
            $lucky = $this->amILucky($val);

            // if return is a value
            if ($fizz)      {$val = $fizz;} 
            if ($buzz)      {$val = $buzz;}
            if ($fizzbuzz)  {$val = $fizzbuzz;}
            if ($lucky)     {$val = $lucky;}

            echo $val." "; 
        
        } );

        // copy to reportData variable for Step3
        $this->reportData = $ar;

        return $ar;   
        
    }

    public function step3():void
    {   
        $ar = $this->reportData;
        $mod = implode(",", $ar);

        // look through the string to see if there are matches
        $fizzMatches = preg_match_all('/\b(fizz)\b/', $mod);
        $buzzMatches = preg_match_all('/\b(buzz)\b/', $mod);
        $fizzbuzzMatches = preg_match_all('/\b(fizzbuzz)\b/', $mod);
        $luckyMatches = preg_match_all('/\b(lucky)\b/', $mod);

        // subtract matches from total count to get the Integer count
        $integerMatches = count($ar) - $fizzMatches - $fizzbuzzMatches - $buzzMatches - $luckyMatches;

        echo "fizz - ".$fizzMatches."<br>";
        echo "buzz - ".$buzzMatches."<br>";
        echo "fizzbuzz - ".$fizzbuzzMatches."<br>";
        echo "lucky - ".$luckyMatches."<br>";
        echo "integer - ".$integerMatches."<br>";
    }
    
    

}