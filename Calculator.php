<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }

    public function par($a)
    {
        if ($a%2==0)
		{
			return true;
		}
		else
		{	
			return false;
		}	
    }
	
}
