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
}