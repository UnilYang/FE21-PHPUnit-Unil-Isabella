<?php
namespace TDD;

class SrcFile {
    public function sum(array $numbers = []) {
        return array_sum($numbers);
    }

    public function ageCalc($current, $birth) {
        return ($current - $birth);
    }

    public function add($num1, $num2){
        if (is_numeric($num1) && is_numeric($num2)){
            return $num1 + $num2;
        } else {
            return "one or two of the numbers is not numberic";
        }
    }

    public function avgArray(array $numbers = []){ // refer to FE21-PHPUnit-Elnaz-Selamet-Shahpar-master
        // takes array of items, by default an empty array
        return round(array_sum($numbers)/count($numbers), 2);
        // array_sum is built-in function which sums up the values inside an array
        // We could, of course, build our own sum solution :)
    }
}
