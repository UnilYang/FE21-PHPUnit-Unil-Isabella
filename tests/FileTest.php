<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
use TDD\SrcFile;


class FileTest extends TestCase {

    public function testSum() {

        $obj = new SrcFile();
        $input = [0, 2, 5, 8];
        $output = $obj->sum($input);

        $this->assertEquals(
            15,
            $output,
            'When summing the total should equal 15');
    }

    public function testAgeCalc() {
        $obj = new SrcFile();
        $output = $obj->ageCalc(2021, 1987);
        $this->assertEquals(34, $output, 'Wrong age calculated, expected: 34');
    }

    public function testAdd() {
        $obj1 = new SrcFile();
        $output1 = $obj1->add(4, 4);
        $this->assertEquals(8, $output1, 'Wrong numbers added, expected: 8');

        $obj2 = new SrcFile();
        $output2 = $obj2->add(3, 2);
        $this->assertEquals(5, $output2, 'Wrong numbers added, expected: 5');

        $obj3 = new SrcFile();
        $output3 = $obj3->add(-4, 6);
        $this->assertEquals(2, $output3, 'Wrong numbers added, expected: 2');

        $obj4 = new SrcFile();
        $output4 = $obj4->add(1, 0);
        $this->assertEquals(1, $output4, 'Wrong numbers added, expected: 1');

        $obj5 = new SrcFile();
        $output5 = $obj5->add(0.4, 0.3);
        $this->assertEquals(0.7, $output5, 'Wrong numbers added, expected: 0.7');
    }

    public function  testAvg() // refer to FE21-PHPUnit-Elnaz-Selamet-Shahpar-master
    {
        $obj = new SrcFile(); // dummy object for testing
        $input = [0, 4, 5, 7]; // put the inputs in its own array
        $output = $obj->avgArray($input); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            4, // 1st param is the expected value
            $output, // 2nd param is the $output variable
            'Average should be 4' // 3rd param is a message displayed in case of failure
        );

        $obj2 = new SrcFile(); // dummy object for testing
        $input2 = [0, 6, 5, 7]; // put the inputs in its own array
        $output2 = $obj2->avgArray($input2); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            4.5, // 1st param is the expected value
            $output2, // 2nd param is the $output variable
            'Average should be 4.5' // 3rd param is a message displayed in case of failure
        );

        $obj3 = new SrcFile(); // dummy object for testing
        $input3 = [0, 0, 5, 7, null]; // put the inputs in its own array
        $output3 = $obj3->avgArray($input3); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            2.4, // 1st param is the expected value
            $output3, // 2nd param is the $output variable
            'Average should be 2.4' // 3rd param is a message displayed in case of failure
        );


        $obj4 = new SrcFile(); // dummy object for testing
        $input4 = [0, 0, 5]; // put the inputs in its own array
        $output4 = $obj4->avgArray($input4); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            1.67, // 1st param is the expected value
            $output4, // 2nd param is the $output variable
            'Average should be 1.67' // 3rd param is a message displayed in case of failure
        );
    }
}
