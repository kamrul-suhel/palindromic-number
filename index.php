<?php
require_once "./vendor/autoload.php";

use App\Palindromic;

$palindrome = new Palindromic();
$palindrome = $palindrome->generatePalindromic(100, 999);
echo 'Largest palindrome number is: '. $palindrome->getLargestPalindromeNumber();

echo '<br>';
echo 'Processing time: '. $palindrome->getProcessTime();
