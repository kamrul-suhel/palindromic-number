<?php

namespace App;

use DateTime;

class Palindromic
{
    /**
     * Processing time
     * @var float
     */
    private $processTime = null;

    /**
     * @var int
     */
    private $largestPalindromeNumber = null;

    /**
     * Should find the largest palindrome made from the given two 3 digit numbers
     * @param $min
     * @param $max
     * @return $this
     * @throws \Exception
     */
    public function generatePalindromic($min, $max)
    {
        $palindrome = 0;
        $startTime = new DateTime("now");
        for ($i = $min; $i <= $max; $i++) {
            // because i * j === j * i, no need of both i and j
            // to count down from 999
            for ($j = $min; $j <= $max; $j++) {
                $x = $i * $j;
                // Check is palindrome number
                if ($x > $palindrome && $x == strrev($x)) {
                    $palindrome = $x;
                    $this->largestPalindromeNumber = $x;
                }
            }
        }
        $endTime = new DateTime("now");
        $diffTime = $startTime->diff($endTime);
        $this->processTime = $diffTime->format('%H:%i:%s');
        return $this;
    }

    /**
     * get ETA time
     * @return float
     */
    public function getProcessTime()
    {
        return $this->processTime;
    }

    /**
     * getter palindrome number
     * @return int
     */
    public function getLargestPalindromeNumber()
    {
        return $this->largestPalindromeNumber;
    }
}